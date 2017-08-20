var fruits = ["Pomme", "Banane", "Orange", "Citron"];

// for(var i = 0; i < fruits.length; i++) {
// console.log(fruits[i]);
// }

fruits.push("Kiwi"); // permet d'ajouter une valeur au tableau

console.log(fruits);

 fruits.pop();  // permet d'effacer la dernière valeur du tableau
console.log(fruits);

fruits.slice() // prend 2 arguments ( index début et index de fin )

var agrumes = fruits.slice(2,4);
console.log(agrumes);

var myArray =["Pomme", 15, true];

console.log(myArray);

var myArray = [[0,1] , [5,7,8] , [12,18]];
console.log(myArray[1][2]);
