// Activation du mode script
"use strict";

// Déclaration d'une variable
var number = 42;
var number2 = 3.14;
var boolean = true;
var boolean2 = false;
var text = "Salut tout le monde !";
var myArray = [number, number2, boolean, boolean2, text];

// Syntaxe alternative poyr definir un tableau
var myArray = new Array(number, number2, boolean, boolean2, text);

// Ajour de code html dans une balise body
document.write("<h2>Code HTML</h2>");
document.write(number + "<br />");
document.write(number2 + "<br />");
document.write(boolean + "<br />");
document.write(boolean2 + "<br />");
document.write(text + "<br />");
document.write(myArray + "<br />");

// structure de controle
document.write("<h2>Structure de controle boolean</h2>");
if (boolean == true) {
  document.write('<div id="boolean-value">boolean est égale à true</div>');
}

// structure de controle boolean2
document.write("<h2>Structure de controle boolean2</h2>");
if (boolean2 == false) {
  document.write('<div id="boolean2-value"> boolean2 est égale a faux </div>');
} else {
  document.write('<div id="boolean2-value"> boolean2 est égale a vrai </div>');
}

// boucle for
document.write("<h2>For</h2>");
for ( let i of myArray ) {
  if (typeof i != "boolean")
  document.write('<div id="">' + i + '</div>');
}

document.write("<h2>For Correction</h2>");
for (var i = 0; i < myArray.length; i++) {
  if (myArray[i] != false && myArray[i] != true) {
  document.write(myArray[i] + "<br />");
  }
}
