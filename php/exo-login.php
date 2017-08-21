<!-- créez un formulaire de login
- champ login
- champ password

recuperez ces données coté php puis :
- affichez les données de l'utilisitateur dans les champs corresspondant
- vérifier que le login correspond a "toto"
- verifier que le password correspond a "123"
- affichez un message d'erreur si le login ou le mdp est faux
-affichez un message de bienvenue si tout es correct -->




<?php

$login = '';
$password = '';
$message = '';

if ($_POST) {
  //var_dump($_GET);
  if (isset($_POST['login'])) {
    $login = $_POST['login'];
  }

  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }
}

if ($login == "toto" && $password == "123") {
  $message = "Bienvenue Toto";
}
elseif ($login == 'toto' && $password != '123') {
  $message = "Le login ou le mot de passe sont incorrect";
}
elseif ($login != 'toto' && $password == '123') {
  $message = "Le login ou le mot de passe sont incorrect";
}
else {
  $message = "Vous n'avez pas accés à cette page";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="exo-login.php" method="post">
      <div>
        <?= htmlentities($message) ?>
      </div>
      <input type="text" name="login"  value="<?= htmlentities($login) ?>" placeholder="Login"/> <br />
      <input type="password" name="password" value="<?= htmlentities($password) ?>" placeholder="Password"/> <br />
      <input type="submit" value="Envoyer">

      <script>
        var message = '<? addcslashes($message)'
          
      </script>

    </form>
  </body>
</html>
