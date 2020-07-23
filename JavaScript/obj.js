var chevalier = {
    "force" : 15,
    "vitesse" : 5,
    "faiblesse" : ["mage", "ninja"],
    "compagnon" :{
        "animal" : "chien",
        "aide" : "écuyer",
    }

};

chevalier.force = 20 ;
chevalier.arme = "épée";

delete chevalier.arme;

var requete = "force";
console.log(chevalier.hasOwnProperty("arme"));
console.log(chevalier.compagnon.aide);