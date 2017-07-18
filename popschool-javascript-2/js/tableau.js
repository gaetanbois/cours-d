"use strict";

// déclaration et initialisation d'un tableu vide
var myArray = [];

// déclaration et initialisation d'un tableau a trois éléments
var myArray2 = [123, 42, 3.14, "Hello"];

// inspection d'un element dans la console
console.log(myArray);
console.log(myArray2);

// Possible de mettre a la suite avec une ,
myArray.push(123);
myArray.push(42);
myArray.push(3.14);
myArray.push("Hello");

console.log(myArray);
console.log(myArray2);

// afficher le premier element d'un tableau
console.log(myArray[0]);

// afficher la taille d'un tableau
console.log(myArray.length);

// afficher le derniere element d'un tableau
if (myArray.length > 0);
console.log(myArray[0]);

// afficher un element en particulier "avant dernier"
if (myArray.length > 0);
console.log(myArray[myArray.length - 2]);

// supprimer le deuxieme element d'un tableau
  myArray.splice(1, 1);
  console.log(myArray);


// supprimer l'element 3.14 du tableau
  myArray.splice(1, 1);
  console.log(myArray);

// modifier le premier element
if (myArray.length > 0) {
  myArray[myArray.length - 1] = "Salut";
}
console.log(myArray);
