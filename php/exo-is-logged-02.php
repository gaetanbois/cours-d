<?php

// Si l'utilisateur est loggé, le redirigé vers duckduckgo.com
// Sinon afficher le message : Vous n'etes pas loggé 

session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    header("LOCATION: http://www.duckduckgo.com", true, 302);
}   else {
    echo "Vous n'êtes pas loggé";
}