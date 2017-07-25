"use strict";
// Definition d'une fonction

function addition (a, b) {
  return a + b;
}
// déclaration d'une variable
var resultat;

// Récuperation du resultat de la fonction

resultat = addition(2, 3);

console.log(resultat);


// action qui permet d'effectuer une addition et d'afficher le resultat

function addAction() {
  var a;
  var b;
  var result;

  a = document.querySelector("input[name=a]").value;
  b = document.querySelector("input[name=b]").value;

  a = parseInt(a);
  b = parseInt(b);

  result = addition(a, b);
  document.querySelector("#result").innerHTML = result;
}

document.addEventListener("DOMContentLoaded", function(event){
document.querySelector("button#add").addEventListener("click", addAction);
});
