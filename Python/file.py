#! / usr / bin / python
# - * - codage: utf-8 - * -

chemin = "C:/Users/holde/fichier.txt"

f = open(chemin, "r")
print(f)
f.close()

with open(chemin, "a", encoding="utf-8") as f:
    f.write("\n Non déconne")
    pass


