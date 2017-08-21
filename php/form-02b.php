<!-- stocker les données utilisateurs dans :
- la variable $url
- la variable $tags

affichez le contenu de ces variables dans la balise body  -->

<?php

$url = '';
$tags = [];

if ($_POST) {
  if (isset($_POST['url'])) {
    $url = $_POST['url'];
  }

  if (isset($_POST['tags'])) {
    $tags = $_POST['tags'];
  }
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <?= htmlentities($url) ?>
    </div>
    <div>
      <?php
      foreach ($tags as $key => $value) {
        echo htmlentities($value);
        echo "<br />";
      }?>
    </div>
  </body>
</html>
