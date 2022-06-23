-- Vue Publication - DetailLocation - Client - Commentaire

-- . Publication.lieu
-- . DetailLocation.nbr_piece
-- . Client.image
-- . Client.nom
-- . Publication.date
-- . Publication.prix
-- . sum par type de reaction
-- . sum commentaire


SELECT
p.id_publication,
dl.nombre_piece,
c.photo_profile,
c.first_name,
c.last_name,
p.date_publication,
p.prix,
nbLike,
nbUnlike,
nbComms
FROM Publication p
JOIN Detail_Location dl
ON p.id_detail_location = dl.id_detail_location
JOIN 