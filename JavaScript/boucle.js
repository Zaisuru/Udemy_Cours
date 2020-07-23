var i = 0 ;
var triangle = [];

while ( i < 10 ) {
    i ++;
    triangle.push("#")
    console.log(triangle);
}

for(var i = 10; i > 0; i--){
    console.log(i);
}


function moyenne (arr){
    var total = 0;
    for (var i = 0; i < arr.length; i++){
        total += arr[i];
    }
    return total /arr.length;

}
console.log(moyenne([15,7,8,14,7]));