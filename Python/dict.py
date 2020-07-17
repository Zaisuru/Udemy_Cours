# Patrick quitte l'entreprise aujourd'hui il faut donc le retirer de la liste
# Julie à maintenant 26 ans
# Paul fetera son anniversaire demain on veut donc savoir l'âge de Paul aujourd'hui

employes = {
            "id01": {"prenom": "Paul", "nom": "Dupont", "age": 32},
            "id02": {"prenom": "Julie", "nom": "Dupuit", "age": 25},
            "id03": {"prenom": "Patrick", "nom": "Ferrand", "age": 36}
            }
del employes["id03"]
employes["id02"]["age"] = 26
age_paul = employes["id01"]["age"]

print(employes)