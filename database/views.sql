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
c.first_name,
c.last_name,
c.photo_profile,
p.date_publication,
p.prix,
count(comm.id_commentaire) as nbComm,
r1.nbLike,
r2.nbUnlike
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
GROUP BY
p.id_publication,
c.first_name,
c.last_name,
c.photo_profile,
p.date_publication,
p.prix,
r1.nbLike,
r2.nbUnlike;



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

-- compte les points pour un client et une publication donnée

create OR REPLACE function getPoint(idPublication INT, idClient INT)
    returns int
    language plpgsql
    as
    $$
        declare
            nLike INT;
            nUnlike INT;
            nTagsEq INT;
            nBoost INT;
            point INT;
        
        begin
            SELECT COALESCE(nbLike,0) nbLike into nLike FROM v_publication where id_publication = idPublication;
            SELECT COALESCE(nbUnlike,0) into nUnlike FROM v_publication where id_publication = idPublication;
            SELECT count(*) into nTagsEq FROM v_tag_client_pub where id_publication = idPublication and id_client = idClient;
            SELECT count(*) into nBoost FROM v_boost_encours where id_publication = IdPublication;


            point = nLike*3 + nUnlike*(-3) + nTagsEq*5 + nBoost*10;
            return point;

        end;
    $$;

 
-- retourne la liste des publications avec leurs points par rapport à un client
 create OR REPLACE function getPublicationsPoint(idClient INT)
    returns TABLE (
        id_publication INT,
        titre varchar(100),
        first_name varchar(50),
        last_name varchar(50),
        photo_profile varchar(50),
        date_publication timestamp,
        prix int,
        nbComm bigint,
        nbLike bigint,
        nbUnlike bigint,
        points int
        )
    language plpgsql
    as
    $$
        begin

            RETURN QUERY
            SELECT p.*,getpoint(p.id_publication,idClient)
            from v_publication p;
        end;
    $$;



