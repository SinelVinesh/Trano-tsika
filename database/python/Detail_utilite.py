from random import randrange

f = open("detail_utilite.sql", "a")

id_publication = 1

while id_publication <= 500 :
    nb_utilite = randrange(1,4)
    i = 0
    while i < nb_utilite:
        id_utilite = randrange(1,4)
        f.write(f"INSERT INTO Detail_utilite(id_utilite,id_publication) values({id_utilite},{id_publication}); \n")
        i += 1
    id_publication += 1
f.close()