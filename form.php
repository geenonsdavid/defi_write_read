<?php
echo '<form class="w-25" method="POST" action="">';
echo '<label for="message" class="form-label form-control-lg">Message :</label>';
echo '<textarea name="message" id="message" cols="30" rows="1" class="form-control"></textarea>';
echo '<button type="submit" class="btn btn-primary m-2">Envoyer</button>';
echo '</form>';

// ajoute le message
 if ($_SERVER['REQUEST_METHOD'] === 'POST' AND !empty($_POST['message'])){
    $pdo->exec("INSERT INTO messages (message) VALUES ('$_POST[message]')");
    header('Location: index.php');
 }else{
    echo "<div class='alert alert-danger w-25 m-2' role='alert'>Veuillez saisir un message</div>";
 }