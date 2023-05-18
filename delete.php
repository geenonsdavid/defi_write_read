<?php
// récupère l'id du message à effacer
$id = $_GET['id'];
// connexion à la base de données
include_once 'connexion.php';

// efface le message
$pdo->exec("DELETE FROM messages WHERE id = $id");
// retourne à la page index.php
header('Location: index.php');
?>

