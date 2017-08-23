<?php

//démarrage de la session
session_start();

//affichage d'une clé
if (isset($_SESSION['key'])){
    echo $_SESSION['key'];
}

