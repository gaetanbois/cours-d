<?php 

require('vendor/autoload.php');
require('todolist-connect.php');

$messages = [];
$title = null;
$description = null;
$deadline = null;
$done = false;

if ($_POST) {
    $valid = true;
    
    if(isset($_POST['title']) && !empty(trim($_POST['title']))) {
        $title = $_POST['title'];
    } else {
        $valid = false;
        $messages['title'] = "Vous devez spécifier un titre";
    }
    
    if(isset($_POST['description']) && !empty(trim($_POST['description']))) {
        $description = $_POST['description'];
    }  
    
    if(isset($_POST['deadline']) && !empty(trim($_POST['deadline']))) {
        $deadline = $_POST['deadline'];
    }  
    
    if(isset($_POST['done']) && !empty(trim($_POST['done']))) {
        $done = (bool) $_POST['done'];
    }  
    
    
    if ($valid) {
        $conn->insert('todolist', [
            'title' => $title,
            'description' => $description,
            'deadline' => $deadline,
            'done' => (bool) $done, 
        ]);
        
        $messages['form'] = 'tache créée';
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
</head>

</html>

<body>

    <h1>Création d'une tâche</h1>
    <div>
        <?php
    if(isset($messages['form'])) {
        echo $messages['form'];
    }
    ?>
    </div>
    <form action="<?= basename(__FILE__)?>" method="post">

        <div>
            <?= isset($messages['title']) ? $messages['title']:''
            ?>
        </div>

        <input type="text" name="title" value="<?= htmlentities($title)?>" placeholder="titre" /> <br />
        <input type="text" name="description" value="<?= htmlentities($description)?>" placeholder="description" /> <br />
        <input type="datetime" name="deadline" value="<?= htmlentities($deadline)?>" placeholder="date limite" /> <br />
        <input type="checkbox" name="done" value="1" <?php if($done) {echo 'checked';}?> /> <br />
        <input type="submit" value="valider" />

    </form>

</body>

</html>
