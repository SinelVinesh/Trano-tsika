-- Vue Publication - DetailLocation - Client - Commentaire

-- . Publication.id
-- 	. Publication.titre
-- 	. Client.id
-- 	. Client.nom
-- 	. Client.image
-- 	. Publication.date
-- 	. Publication.prix
-- 	. count react par type de reaction
-- 	. count commentaire

CREATE or REPLACE view v_publication as
SELECT
p.id_publication,
p.titre,
c.id_client,
c.first_name,
c.last_name,
c.photo_profile,    
p.date_publication,
p.prix,
p.description,
p.nombre_piece,
p.surface,
p.latitude,
p.longitude,
count(comm.id_commentaire) as nbComm,
r1.nbLike,
r2.nbUnlike,
loc.id_localisation,
loc.nom_lieu
FROM Publication p
JOIN
Client c
ON p.id_client=c.id_client
LEFT OUTER JOIN
Commentaire comm
ON p.id_publication=comm.id_publication
LEFT OUTER JOIN
(SELECT id_publication,count(*) as nbLike FROM Reaction where id_reaction_item = 1 group by id_publication) as r1
ON p.id_publication=r1.id_publication
LEFT OUTER JOIN
(SELECT id_publication,count(*) as nbUnlike FROM Reaction where id_reaction_item = 2 group by id_publication) as r2
ON p.id_publication=r2.id_publication
JOIN Localisation loc 
ON p.id_localisation=loc.id_localisation
GROUP BY
p.id_publication,
c.id_client,
c.first_name,
c.last_name,
c.photo_profile,
p.date_publication,
p.prix,
p.description,
p.nombre_piece,
p.surface,
p.latitude,
p.longitude,
r1.nbLike,
r2.nbUnlike,
loc.id_localisation,
loc.nom_lieu;



--vue tag_client - detail_tags
CREATE or REPLACE view v_tag_client_pub as
SELECT tc.*,dt.id_detail_tag,dt.id_publication FROM 
Tag_client tc
JOIN
Detail_tags dt 
on tc.id_tag=dt.id_tag;



--vue publication - boost
CREATE or REPLACE view v_boost as
SELECT p.*,b.id_boost,b.date_debut,b.date_fin
FROM Publication p 
JOIN 
Boost b 
on p.id_publication=b.id_publication;


CREATE or REPLACE view v_boost_encours as
SELECT * FROM v_boost
where 
date_debut <= now()
and date_fin >= now();

create OR REPLACE function getLikeTag(idClient INT,idTag int)
    returns int
    language plpgsql
    as
    $$
        declare
            nLike INT;
        
        begin
            select count(*) into nLike from reaction r join detail_tags d on r.id_publication=d.id_publication where id_client = idClient and id_tag=idTag and id_reaction_item=1;            

            return nLike;

        end;
    $$;

    create OR REPLACE function getUnlikeTag(idClient INT,idTag int)
    returns int
    language plpgsql
    as
    $$
        declare
            nUnlike INT;
        
        begin
            select count(*) into nUnlike from reaction r join detail_tags d on r.id_publication=d.id_publication where id_client = idClient and id_tag=idTag and id_reaction_item=2;            

            return nUnlike;

        end;
    $$;

    create OR REPLACE function getLikeUnlikeDiffTag(idClient INT,idTag int)
    returns int
    language plpgsql
    as
    $$
        declare
            diff INT;
            nLike int;
            nUnlike int;
        
        begin
            select * from getLikeTag(idClient,idTag) into nLike;
            select * from getUnlikeTag(idClient,idTag) into nUnlike;
            
            diff = nLike - nUnlike;
            return diff;

        end;
    $$;

    create OR REPLACE function getLikeUnlikeDiffAllTagCorresp(idClient INT)
    returns TABLE (
        id_tag int,
        diff INT
        )
    language plpgsql
    as
    $$   
        BEGIN
            RETURN QUERY
            select v.id_tag,getLikeUnlikeDiffTag(idClient,v.id_tag) from v_tag_client_pub v;

        end;
    $$;

    create OR REPLACE function countPositifTag(idClient INT)
    returns int
    language plpgsql
    as
    $$
        declare
            positif INT;
        
        begin
            select count(*) into positif from getLikeUnlikeDiffAllTagCorresp(idClient) where diff > 0;
            
            return positif;

        end;
    $$;

    create OR REPLACE function countNegatifTag(idClient INT)
    returns int
    language plpgsql
    as
    $$
        declare
            negatif INT;
        
        begin
            select count(*) into negatif from getLikeUnlikeDiffAllTagCorresp(idClient) where diff <= 0;
            
            return negatif;

        end;
    $$;
    

create OR REPLACE function getPointTag(idClient INT)
    returns int
    language plpgsql
    as
    $$
        declare
            nLike INT;
            nUnlike INT;
            nComms INT;
            nTagsEq INT;
            nBoost INT;
            pointLike INT;
            pointUnlike INT;
            pointTag INT;
            pointBoost INT;
            point INT;
            ecartDay INT;
            diffPosNegTag INT;
            positiftag INT;
            negatiftag INT;
        
        begin
            select EXTRACT(DAY FROM (now()-date_publication)) into ecartDay from v_publication where id_publication = idPublication;
            SELECT COALESCE(nbLike,0) nbLike into nLike FROM v_publication where id_publication = idPublication;
            SELECT COALESCE(nbUnlike,0) into nUnlike FROM v_publication where id_publication = idPublication;
            SELECT count(*) into nTagsEq FROM v_tag_client_pub where id_publication = idPublication and id_client = idClient;
            SELECT count(*) into nBoost FROM v_boost_encours where id_publication = IdPublication;
            SELECT valeur_point into pointLike FROM Classement_point where id_classement_point = 2;
            SELECT valeur_point into pointUnlike FROM Classement_point where id_classement_point = 3;
            SELECT valeur_point into pointTag FROM Classement_point where id_classement_point = 4;
            SELECT valeur_point into pointBoost FROM Classement_point where id_classement_point = 1;
            SELECT * from countPositifTag(idClient) into positiftag;
            SELECT * from countNegatifTag(idClient) into negatiftag;
            

            diffPosNegTag = positiftag - negatiftag;
            point = (100 + nLike*pointLike + nComms + nUnlike*pointUnlike) * (1 + 0.2*nBoost + 0.01 * diffPosNegTag) - (ecartDay) ;
            return point;

        end;
    $$;

create OR REPLACE function getPoint(idPublication INT, idClient INT)
    returns int
    language plpgsql
    as
    $$
        declare
            nLike INT;
            nUnlike INT;
            nComms INT;
            nTagsEq INT;
            nBoost INT;
            pointLike INT;
            pointUnlike INT;
            pointTag INT;
            pointBoost INT;
            point INT;
            ecartDay INT;
        
        begin
            select EXTRACT(DAY FROM (now()-date_publication)) into ecartDay from v_publication where id_publication = idPublication;
            SELECT COALESCE(nbLike,0) nbLike into nLike FROM v_publication where id_publication = idPublication;
            SELECT COALESCE(nbUnlike,0) into nUnlike FROM v_publication where id_publication = idPublication;
            SELECT count(*) into nTagsEq FROM v_tag_client_pub where id_publication = idPublication and id_client = idClient;
            SELECT count(*) into nBoost FROM v_boost_encours where id_publication = IdPublication;
            SELECT valeur_point into pointLike FROM Classement_point where id_classement_point = 2;
            SELECT valeur_point into pointUnlike FROM Classement_point where id_classement_point = 3;
            SELECT valeur_point into pointTag FROM Classement_point where id_classement_point = 4;
            SELECT valeur_point into pointBoost FROM Classement_point where id_classement_point = 1;
            


            point = (100 + nLike*pointLike + nComms + nUnlike*pointUnlike) * (1 + 0.2*nBoost + 0.01 * nTagsEq) - (ecartDay) ;
            return point;

        end;
    $$;


 
-- retourne la liste des publications avec leurs points par rapport à un client
 create OR REPLACE function getPublicationsPoint(idClient INT)
    returns TABLE (
        id_publication INT,
        titre varchar(100),
        id_client int,
        first_name varchar(50),
        last_name varchar(50),
        photo_profile varchar(50),
        date_publication timestamp,
        prix int,
        description text,
        nombre_piece int,
        surface float,
        latitude float,
        longitude float,
        nbComm bigint,
        nbLike bigint,
        nbUnlike bigint,
        id_localisation int,
        nom_lieu varchar(100),
        points int
        )
    language plpgsql
    as
    $$
        begin

            RETURN QUERY
            SELECT p.*,getpoint(p.id_publication,idClient) as point
            from v_publication p
            order by point desc;
        end;
    $$;

-- detail_utilite + utilte : v_detail_utilite 
CREATE or REPLACE VIEW v_detail_utilite as
SELECT d.*,u.nom_utilite
FROM Detail_utilite d
JOIN 
Utilite u
on
d.id_utilite = u.id_utilite;


-- detail_tags + tags : v_details
CREATE or REPLACE VIEW v_details as
SELECT d.*,t.nom_tag FROM Tag t
JOIN
Detail_tags d
on
t.id_tag = d.id_tag;


-- notifications message + commentaire : v_notifications
CREATE or REPLACE VIEW v_notifications as
SELECT * from (SELECT m.id_message,
m.date_envoye,
m.id_client_receiver,
c.id_client,
c.first_name,
c.last_name,
'message' as type
FROM Message m
JOIN Client c
on
m.id_client_sender = c.id_client
JOIN Client c1
on
m.id_client_receiver = c1.id_client
WHERE m.vu = false
UNION ALL
SELECT comm.id_commentaire,
comm.date_commentaire,
p.id_client as id_client_receiver,
c.id_client,
c.first_name,
c.last_name,
'commentaire' as type
FROM Commentaire comm
JOIN Client c
on comm.id_client = c.id_client
JOIN Publication p
on
comm.id_publication = p.id_publication
WHERE vu = false) as notifs
order by date_envoye desc;


-- commentaire + client : v_commentaire
CREATE OR REPLACE VIEW v_commentaire AS(
    SELECT
    Client.id_client AS id_client,
    Publication.id_publication AS id_publication,
    Client.first_name AS first_name,
    Client.last_name AS last_name,
    Commentaire.date_commentaire AS date_commentaire,
    Commentaire.texte_commentaire AS texte_commentaire
    FROM Publication
    JOIN Commentaire ON
    Commentaire.id_publication=Publication.id_publication
    JOIN Client ON
    Client.id_client=Commentaire.id_client
);

-- message + client_sender + client_receiver : v_message
CREATE OR REPLACE VIEW v_message AS(
    SELECT
    Publication.id_publication AS id_publication,
    c1.id_client AS id_client_sender,
    c1.first_name AS first_name_sender,
    c1.last_name AS last_name_sender,
    c2.id_client AS id_client_receiver,
    c2.first_name AS first_name_receiver,
    c2.last_name AS last_name_receiver,
    Message.date_envoye AS date_envoye,
    Message.message_texte AS message_texte
    FROM Message
    JOIN Client as c1 ON
    c1.id_client=Message.id_client_sender
    JOIN Client as c2 ON
    c2.id_client=Message.id_client_receiver
    JOIN Publication
    ON Message.id_publication=Publication.id_publication
);


-- question non repondu
CREATE OR REPLACE VIEW v_question_non_replied AS(
    SELECT
    Question.id_question AS id_question,
    Question.intitule AS intitule
    FROM Question
    JOIN Reponse_client ON
    Question.id_question=Reponse_client.id_question
    where Question.id_question not in (select id_question from Reponse_client)
);

--vue v_detail_tags
CREATE or REPLACE view v_detail_tags as
SELECT dt.*,Tag.nom_tag FROM 
Detail_tags dt
JOIN
Tag 
on dt.id_tag=Tag.id_tag;