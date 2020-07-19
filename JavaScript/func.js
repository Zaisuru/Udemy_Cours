function maFonction(num){
    console.log(2 + num);
}
function soustraction(a, b){
    console.log(a -b)
}
maFonction(2);
soustraction(2, 1)


function returnSoustraction(a, b){
    return a - b ;
}

var result = returnSoustraction(1, 5);

console.log(returnSoustraction(1, 5));

console.log(result);

// calcul d'une moyenne en entrant 2 éléments
var note1 = 17;
var note2 = 14;

var moyenne = maMoyenne(note1, note2)

function maMoyenne(a , b){
    return (a+b)/2;
}

console.log(moyenne);

console.log(2 == 2)

var a = 1;
var b = 2;
console.log(a == b ? "Vrai" : "Faux"); // condition ternaire
var age = 17;
var majeur = 18;
console.log(age == majeur ? "Ok" : "Dégage");
