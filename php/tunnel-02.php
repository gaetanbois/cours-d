<?php  

session_start();

            $product= '';
            $quantity = '';

            if ($_POST) {
              //var_dump($_GET);
              if (isset($_POST['product'])) {
              $product = $_POST['product'];
              }

              if (isset($_POST['quantity'])) {
              $quantity = $_POST['quantity'];
              }
                
                $_SESSION['product'] = $product;
                $_SESSION['quantity'] = $quantity;
               
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
        <p>Voulez vous commander
            <?= htmlentities($quantity)?>
                <?= htmlentities($product)?> ?
        </p>
        <a href="tunnel-03.php">Confirmer ?</a>
    </div>
</body>

</html>
