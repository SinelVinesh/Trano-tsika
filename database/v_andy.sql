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
SELECT m.id_message,
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
WHERE vu = false
order by date_envoye desc;

