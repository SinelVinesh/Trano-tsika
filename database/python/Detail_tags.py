from random import randrange

f = open("detail_tags.sql", "a")

id_publication = 1

while id_publication <= 500 :
    nb_tag = randrange(1,6)
    i = 0
    while i < nb_tag:
        id_tag = randrange(1,48)
        f.write(f"INSERT INTO Detail_tags(id_tag,id_publication) values({id_tag},{id_publication}); \n")
        i += 1
    id_publication += 1
f.close()