var nom ="Holderbaum";
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

var arr = [1, 2, 3];
arr.push("Salut"); // Rajouter un élément dans la liste
arr.pop(); // Suppr la dernière entrée
arr.unshift(0); // Rajoute au début
arr.shift()//Suppr la première entrée 

console.log(arr);

var initial =prenom[0] + nom[0];
var result = [nom, prenom, initial];
console.log(result)

var correct = [];
correct.push(prenom, nom, initial);
console.log(correct)