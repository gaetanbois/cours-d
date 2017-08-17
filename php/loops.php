<?php

$exemple = rand(0, 100);

echo $exemple;
echo "<br />";

// créez un tableau nommé $data
// ajoutez-y 100 valeurs aléatoire comprise entre 0 et 10

$data = [];

for ($i = 0; $i < 100; $i++) {
  $data[] = rand(0, 10);
}

foreach ($data as $key => $value) {
  echo $value;
  echo "<br />";
}

// créez un tableau qui contient 50 mots differents
// réinitialiser un tableau vide dans $data
// ajoutez-y 100 tableaux ayant la structure suivantes
// - une clé "word" contenant un des 10 mots séléctionné au hasard
// - une clé "count" contenant une valeur aléatoires comprises entre 0 et 10


$mots = ["Lumha", "Borlys", "Cylgam", "Sallomlig", "Lamerncalcylcel", "Nirthonorcel", "Thonar", "Colsalcolhu", "Hoirnmorlom", "Lugloggymlim", "Hallgum", "Gumberthilemyrn", "Yrncollemcil", "Lemliggemgym", "Lamsulsol", "Loslaghocylurn","Morberyrnsol", "Barrnar", "Lemnar", "Thusul", "Lashuthonar", "LughoGumbyr", "Gombur",
"hey", "Gumcelhallarnha", "Tholegcol", "Bursyllog", "Birculmar", "Lamnor" ,"Morsollam", "Urngum", "Calluglimirn", "Irnlusmorhical", "Mircylnirgomlem", "Lagcilarnsulthe", "Losnorsel", "Nircalhellsolmor", "Birhesolnarlim","Arnlagcollam","Borsilsyl", "Mermurlosornbor", "Lesthimor", "Gamhu", "Ernlamlys", "Cylmar", "Cylbur", "Helimtheirn", "Salgimbir",
"Silsellosgym", "ho"];

for ($i=0; $i < count($mots) ; $i++) {
  echo $mots[$i];
  echo "<br />";
}

$data = [];

foreach ($mots as $word => $value) {
  echo $value;
}
