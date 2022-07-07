from random import randrange
from random import uniform
from datetime import timedelta
from datetime import datetime
from dateutil.relativedelta import relativedelta

def random_date(start, end):
    delta = end - start
    int_delta = (delta.days * 24 * 60 * 60) + delta.seconds
    random_second = randrange(int_delta)
    return start + timedelta(seconds=random_second)

f = open("boost.sql", "a")

d1 = datetime.strptime('2022-03-01', '%Y-%m-%d')
d2 = datetime.strptime('2022-07-12', '%Y-%m-%d')

id_publication = 1
nbBoost = 0
while nbBoost < 100 :
    bool = randrange(0,2)
    if bool == 1:
        date_debut = random_date(d1,d2)
        date_fin = date_debut + relativedelta(months=1)

        f.write(f"INSERT INTO Boost(id_publication,date_debut,date_fin) values({id_publication},'{date_debut}','{date_fin}'); \n")
        nbBoost += 1
    id_publication += 1
f.close()
