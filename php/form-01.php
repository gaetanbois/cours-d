


<?php

$title = '';
$body = '';

if ($_POST) {
  //var_dump($_GET);
  if (isset($_POST['title'])) {
  $title = $_POST['title'];
  }

  if (isset($_POST['body'])) {
  $body = $_POST['body'];
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="form-01.php" method="post">

      <input type="text" name="title"  value="<?= htmlentities($title) ?>" placeholder="titre"/> <br />

      <textarea name="body" placeholder="texte"><?= htmlentities($body) ?></textarea> <br />

      <input type="submit" value="Envoyer">

    </form>
  </body>
</html>
