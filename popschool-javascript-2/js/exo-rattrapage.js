"use strict";
// exo 1  ------------------------------------------------------------------
// var hasCreditCard = false;
// var accountBalance = 0;
// var itemCost = 43;

// un utilisateur veut faire un achat
// verifier qu'il possede un carte bancaire ou que son compte perso est suffisement approvisionné
// Si les deux conditions sont vrai, privilégiez l'utilisation de son compte perso
//
// les messages :
// - "Vous n'avez pas de moyen de paiement" si il n'y a pas de carte et que le compte est à zero
// -"votre compte perso a été debité de X, le nouveau solde est Y" si le compte perso est suffisement approvisionné
// - "Votre compte perso n'est pas assez approvisionné il vous manque X" si le compte n'est pas assez approvisionné et qu'il n'y a pas de carte
// - "vous allez être redirigé sur la page de paiments de votre banque" si le compte perso n'est pas assez approvisionné mais qu'il a une carte
function getRandomArbitrary2() {
  return Math.round(Math.random());
}
function getRandomArbitrary(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

var accountBalance = getRandomArbitrary(0, 400);
var itemCost = getRandomArbitrary(0 , 400);
var hasCreditCard = getRandomArbitrary2();
console.log(accountBalance);
console.log(itemCost);
console.log(hasCreditCard);

  if (hasCreditCard == false && accountBalance == 0) {
  console.log("Vous n'avez pas de moyen de paiement");
} else if (accountBalance >= itemCost) {
  console.log("Votre compte à été debiter de " + (itemCost) + " €, et votre nouveau solde est de " + (accountBalance -= itemCost) + " € ");
} else if ( accountBalance < itemCost && hasCreditCard == false) {
  console.log("Votre compte perso n'est pas assez approvisionné il vous manque" + (itemCost - accountBalance) + " € ");
} else {
  console.log("Vous allez etre redirigé sur la page de paiments de votre banque");
}

// exemple ou  --------------------------------------------------------
var authenticatedWithEmail = true;
var authenticatedWithPhoneNumber = false;
console.log(authenticatedWithEmail);
console.log(authenticatedWithPhoneNumber);


if (authenticatedWithEmail || authenticatedWithPhoneNumber) {
  console.log("Vous êtes authentifié");
} else {
  console.log("Vous n'êtes pas authentifié");
}

// exo 2 ---------------------------------------------------------------
// sur un site de e-commerce un utilisateur doit au moins fournir un mail ou un numero de telephone  pour confirmer sa commande
// verfifier si l'utilisateur peut confirmer sa commande
// sinon dites-lui qu'il doit fournir au moins une des deux information

var hasEmail = true;
var hasPhone = false;
console.log(hasEmail);
console.log(hasPhone);

if (hasEmail || hasPhone) {
  console.log("Vous pouvez confirmer votre commande");
} else {
  console.log("Vous devez fournir au moins une information");
}
