<?php

session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <div>
        <p>Vous avez commandé
            <?= $_SESSION['quantity'] ?>
                <?= $_SESSION['product'] ?>
        </p>
    </div>
</body>

</html>
