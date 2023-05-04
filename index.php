<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
include_once 'connexion.php';
include_once 'Message.php';

?>
<form class="w-25" method="POST" action="">
<label for="message" class="form-label form-control-lg">Message :</label>
<textarea name="message" id="message" cols="30" rows="1" class="form-control"></textarea>
<button type="submit" class="btn btn-primary m-2">Envoyer</button>
</form>
<?php


    if(empty($_POST["message"])){
       // affiche alerte
         echo "<div class='alert alert-danger w-25 m-2' role='alert'>Veuillez saisir un message</div>";
    }
    else {
    // affiche alerte
    echo "<div class='alert alert-success w-25 m-2' role='alert'>Message envoyé</div>";
    // Ajout d'un message     
    $pdo->exec("INSERT INTO messages (message) VALUES ('$_POST[message]')");
    }

// connaitre nombre de messages
$request ='SELECT COUNT(*) AS nb_messages FROM messages';
$pdoStatement = $pdo->prepare($request);
$pdoStatement->execute();
$nb_messages = $pdoStatement->fetch(PDO::FETCH_ASSOC);

// Récupération des messages

$request = $pdo->prepare('SELECT message,date,id FROM messages');
$request->execute();

// affichage des messages

while ($message = $request->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='card w-25 m-2'>";
    echo "<div class='card-body'>";
    echo "<p class='card-text'>" . $message['message'] . "</p>";
    echo "<p class='card-text'>" . $message['date'] . "</p>";
    echo "<a href='delete.php?id=" . $message['id'] . "' class='btn btn-danger'>Supprimer</a>";
    echo "</div>";
    echo "</div>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>









