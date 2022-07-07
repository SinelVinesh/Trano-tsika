from random import randrange
from random import uniform
from datetime import timedelta
from datetime import datetime

def random_date(start, end):
    delta = end - start
    int_delta = (delta.days * 24 * 60 * 60) + delta.seconds
    random_second = randrange(int_delta)
    return start + timedelta(seconds=random_second)

f = open("publication.sql", "a")

#id_client : 1 à 998
#id_localisation : 1 à 295
#prix : 100 à 150 000 (*1000)
#longitude : 45 à 48.3
#latitude : -18 à -20
#surface : 40 à 1000
#nbpiece : 1 à 10
i = 0
d1 = datetime.strptime('2022-03-01', '%Y-%m-%d')
d2 = datetime.strptime('2022-07-12', '%Y-%m-%d')
titreDescri = []
titreDescri.append(("Villa du bord","Villa luxueuse avec vue sur la mer, pouvant vous accueillir vous avec toute votre famille"))
titreDescri.append(("Trano milamina","Maison chaleureuse avec un voisinage calme pour un hébergement en toute sécurité"))
titreDescri.append(("Appartement gothique","Appartement gothique pour un locataire qui aime les sensations fortes et une vie de risque"))
titreDescri.append(("Villa mihadana","Villa bien isolé et tranquille pour des locataires qui préfèrent une vie éloignée de la ville"))
titreDescri.append(("FuturHouse","Maison moderne avec des fournitures contemporaine qui vous fait voyage dans un monde futuriste"))
titreDescri.append(("Luxe Appart","Appartement de luxe vous vous retrouverez dans un environnement où le luxe et confort règnent en maître."))
titreDescri.append(("Maison contigue","Maison contigue qui augmente considérablement le charme de la maison et la convivialité entre voisins"))
titreDescri.append(("The village","Maison villagoise dans un milieu rural qui vous éloigne dans un milieu plus serein pour profiter d un calme hors du commun"))
titreDescri.append(("Appartement équipé","Appartement bien immobilier composé d’une pièce principale ainsi que d’une cuisine qui est indépendante"))
titreDescri.append(("Villa individuelle","Villa individuelle qui se situe sur son propre terrain, sans toucher d’autres maisons."))
titreDescri.append(("Villa vaudoise","Villa vaudoise: des tuiles plates, de grandes baies vitrées avec des croisillons, de grandes lucarnes et un certain standing"))
titreDescri.append(("Appartement standard","Appartement standard comprenant deux espaces principaux séparés : un salon avec coin cuisine et une chambre"))
titreDescri.append(("Appartement familial","Un appartement avec un salon, une cuisine indépendante ou ouverte sur le salon, deux chambres, une cuisine et une salle de bain."))
titreDescri.append(("Appartement à 2 niveaux","Un appartement sur 2 niveaux reliés par un escalier intérieur."))
titreDescri.append(("Trano manara-penitra","Cette maison contemporaine reprend un grand nombre des codes de la maison moderne (formes rectangulaires, baies vitrées, toit-terrasse)."))
titreDescri.append(("Trano gasy","On retrouve en général plusieurs caractéristiques de la maison traditionnelle : les cloisons sont dans la majorité des cas, soit en brique, soit en parpaings creux"))
titreDescri.append(("Maison de vacances","Entre charme et tradition, que ce soit dans le style mas ou bastide, ce type de maison permet de créer un lieu de détente idéal pour les vacances."))
titreDescri.append(("Maison moderne","La maison moderne est assez proche de la maison contemporaine mais distinguent radicalement de la maison traditionnelle. Fini les toits en tuiles à double pente"))
titreDescri.append(("Week-end home","Maison de week-end : vivre dans un centre de vacances avec vue sur la mer"))
titreDescri.append(("Bungalow","Bungalow bien sophistiqué avec vue sur la mer, qui emplifi de gaçon exponetielle vos sensations et rends alors vos de vacance inoubliable"))

while i < 500 :
    id_client = randrange(1,999)
    id_localisation = randrange(1,296)
    indexTitreDescri = randrange(0,len(titreDescri))
    titre = titreDescri[indexTitreDescri][0]
    description = titreDescri[indexTitreDescri][1]
    prix = randrange(100,150000) * 1000
    date_publication = random_date(d1,d2)
    longitude = uniform(45,48.3)
    latitude = uniform(-20,-18)
    surface = randrange(40,1001)
    nombre_piece = randrange(1,11)

    f.write(f"INSERT INTO Publication(id_client,id_localisation,titre,description,prix,date_publication,longitude,latitude,surface,nombre_piece) values({id_client},{id_localisation},'{titre}','{description}',{prix},'{date_publication}',{longitude},{latitude},{surface},{nombre_piece}); \n")
    i += 1
f.close()