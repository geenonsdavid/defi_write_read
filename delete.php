<?php

// récupère le nom de la table à effacer
$delete = $_GET['delete'];

// récupère l'id du message à effacer
$id = $_GET['id'];

// connexion à la base de données
include_once 'connexion.php';
// selectionner la table games
$pdo->exec('USE defi');

// efface le message
$pdo->exec("DELETE FROM $delete WHERE id = $id");

// retourne à la page index.php
header('Location: index.php');
?>

