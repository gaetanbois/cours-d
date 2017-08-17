<?php

$myArray = [];

$myArray[] = 42;
$myArray[] = 3.14;
$myArray[] = "foo bra baz";
$myArray[] = true;

for ($i = 0; $i < count($myArray); $i++) {
  echo $myArray[$i];
  echo "<br />";
}

//suppression de la donnée située a l'index deux
  array_splice($myArray, 2, 1);

//lecture du tableau avec une boucle foreach
foreach ($myArray as $key => $value) {
  echo $key;
  echo "<br />";
  echo $value;
  echo "<br />";
}
