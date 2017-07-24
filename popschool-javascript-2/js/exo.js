"use strict";

var data = [
  {
    id: 243,
    name: "user 2",
    points: [76, 64, 10, 67, 64]
  },
  {
    id: 123,
    name: "user 1",
    points: [42, 100, 54, 65, 32]
  },
  {
    id: 768,
    name: "user 3",
    points: [93, 2, 56, 78, 100]
  },
];


// a partie de ces données :
// -afficher un tableau HTML contenant le nom des utilisateurs et leurs scores
// -afficher un tableau HTML contenant le nom des utilisateurs et leurs score moyen
// -afficher un tableau HTML contenant les 5 meilleurs scores etle nom de de l'utilisateurs et la position du score, triés par ordre decroissant puis par son username
//
// indices :
// - vous pouvez parcourir le tableau de données avec une boucle for
// - pour lire le nom : user.name
// - pour lire le tableau de scores : user.scores


var html = "";
var scores0 = data[0].points;
var scores1 = data[1].points;
var scores2 = data[2].points;

var moyenne0 = [76, 64, 10, 67, 64].reduce((a, b)=> a + b,0) / 5;
var moyenne1 = [42, 100, 54, 65, 32].reduce((a, b)=> a + b,0) / 5;
var moyenne2 = [93, 2, 56, 78, 100].reduce((a, b)=> a + b,0) / 5;

// 1er Tableau
html = html + "<table class='table'><tr><th>ID</th><th>Name</th><th>Points</th></tr>"
for (var i= 0; i < data.length; i++) {
  html = html + "<tr><td>" + data[i].id + "</td><td>" + data[i].name + "</td><td>" + data[i].points + "</td></tr>";
}
html = html + "</table>";
document.querySelector('#tabs').innerHTML = html;

// 2ème tableau
html = html + "<table class='table'><tr><th>Name</th><th>Scores</th><th>Scores Moyen</th></tr>"

for (var i= 0; i < data.length; i++) {
  html = html + "<tr><td>" + data[i].name + "</td><td>" + data[i].points + "</td></tr>";

  for (var i = 0; i < data.points[i] ; i++) {
    console.log(data.points);
    // html = html + "<td>" + moyenne[0] + "</td>";
    }
 }


html = html + "</table>";
document.querySelector('#tabs').innerHTML = html;
