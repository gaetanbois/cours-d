"use strict";

function getRandomArbitrary(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

var stock = getRandomArbitrary(0, 150);
console.log(stock);
// afficher dans la console
// "stock indisponible" si stock le stock est a 0
 // "stock en faible quantité" si le stock est inferieur a 50
 // "stock disponible" si le stock est suprerieur a 50

 if (stock > 50) {
   document.write('<div>Stock Disponible</div>');
 }  else if (stock < 50 && stock > 0) {
   document.write('<div>Stock en faible quantité</div>');
 }  else {
   document.write('<div>Stock indisponible</div>');
}

// afficher dans la commande
// "commande en cours" si hasValidAddress et hasValidAgrement sont vrais
// "vous devez renseigner une adresse" si hasValidAddress est faux
// "vous devez cochez la case condition de vente" si hasValidAgrement est faux
// "vous devez renseigner un adresse et vous devez cochez la case de condition de vente" si hasValidAgrement et hasValidAddress sont faux

function getRandomArbitrary2(min, max) {
  return Math.round(Math.random());
}

var hasValidAddress = getRandomArbitrary2(0, 1);
var hasValidAgrement = getRandomArbitrary2(0, 1);
console.log(hasValidAgrement);
console.log(hasValidAddress);

if (hasValidAgrement == false && hasValidAddress == false) {
  document.write('<div>Vous devez renseigner une adresse et vous devez cochez la case condition de vente</div>');
} else if (hasValidAddress == false) {
  document.write('<div>Vous devez renseigner une adresse</div>');
} else if (hasValidAgrement == false) {
  document.write('<div>Vous devez cocher la case condition general de vente</div>');
} else {
  document.write('<div>Commande en cours</div>');
}
