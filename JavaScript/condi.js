function esTuFort (force){
    if (force >= 15) {
        return "Ta force dépasse 15";
    }
    else if (force >= 10){
        return "Ta force dépasse 10";
    }
    return "Travail encore ta force";
}

console.log(esTuFort(16));


// function qui renvoi un array
// 3 notes dans le tableau
//1 calcul de la moyenne
//2 > 15 Très bien >10 Bien <10 convocation des parents
function  niveau(arr){
    var moyenne = (arr[0] + arr[1] + arr[2]) /  arr.length;

    if (moyenne >= 15 ) {
        return "Très bien";
    }
    else if (moyenne >= 10){
        return "Bien";
    }
    return "Convocation des parents";
}
console.log(niveau([12, 8, 16]));

