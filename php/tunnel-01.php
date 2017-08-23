<!--
//dans tunnel-01.php créer un formulaire avec:
// un champ texte nommé "product" 
// un champ numérique nommé "quantity"
// le formulaire doit envoyer des données a tunnel-02.php

// dans tunnel-02 récuperer les données et insérez les dans les clés "product" et "quantity" de la variable session
// ajouter un lien nommé "commander" qui renvoit vers la page tunnel-03.php

// dans tunnel-3.php affichez les clés "product" et "quantity" de la variable session 
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <form action="tunnel-02.php" method="post">


        <input type="text" name="product" value="" placeholder="Nom du produit" /> <br />

        <input type="number" name="quantity" value="" placeholder="Quantité" /> <br />


        <input type="submit" value="Envoyer">

    </form>
</body>

</html>
