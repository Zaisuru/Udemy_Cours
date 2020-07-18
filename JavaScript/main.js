var nom ="Thomas";
var age = 24;

var texte  = "Bonjour " + nom + " Tu as " + age + " ans"; 

console.log(texte);


var prenom = "Thomas";
console.log(prenom[2]); // Récupération de la lettre placer en 2 
console.log(prenom[prenom.length -1]); // Récupération de la dernière lettre 

// Arrays
var stats =["attaque", "défense"]
var array =[nom, age, prenom, stats];

array[0] ="Holder";
array[1] ="30";
array[3][1] ="Puissance";

console.log(array);