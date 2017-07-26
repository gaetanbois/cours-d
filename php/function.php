<?php

function addition($a, $b) {
  return $a + $b;
}

$result = addition(2, 3);

echo $result;
echo "<br />\n";

// créeer une fonction qui prend une variable en parametre
// renvoie la chaine de caractère "vrai" si la variable est True
// renvoie la chaine de caractère "faux" si la varibale est false

// appelez cette variable avec :
// - une valeur true et affichez le resulat
// - une valeur false et affichez le resultat


function echoBoolean($booleanValue){
if ($booleanValue == true) {
  return "true";
} else {
  return "false";
  }
}

$variable = false;
$variable2 = true;

echo echoBoolean ($variable);
echo "<br />\n";

echo echoBoolean ($variable2);
echo "<br />\n";

function echoBoolean2($booleanValue){
  return $booleanValue ? "vrai" : "faux;";
}

  echo echoBoolean ($variable);
  echo "<br />\n";

  echo echoBoolean ($variable2);
  echo "<br />\n";

  function echoBoolean3($booleanValue){
    if ($booleanValue === true){
      return "vrai";
    } else if ($booleanValue === false){
      return "faux";
    } else {
      return false;
    }
  }

  $result = echoBoolean3("foo bar baz");

  if ($result == false) {
    echo "booleanValue n'est pas une valeur bolléenne";
    echo "<br />\n";
  } else {
    echo $result;
    echo "<br />\n";
  }

  function booleanToString4(bool $booleanValue) {
    return $booleanValue ? "vrai" : "faux";
  }
  echo booleanToString4(true);
  echo "<br />\n";

  echo booleanToString4(false);
  echo "<br />\n";

  echo booleanToString4("foo bar baz");
  echo "<br />\n";
