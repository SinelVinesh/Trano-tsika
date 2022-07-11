create view v_commentaire (id_client, id_publication, first_name, last_name, date_commentaire, texte_commentaire) as
SELECT client.id_client,
       publication.id_publication,
       client.first_name,
       client.last_name,
       commentaire.date_commentaire,
       commentaire.texte_commentaire
FROM publication
         JOIN commentaire ON commentaire.id_publication = publication.id_publication
         JOIN client ON client.id_client = commentaire.id_client
ORDER BY commentaire.date_commentaire DESC;

alter table v_commentaire
    owner to tranotsika;