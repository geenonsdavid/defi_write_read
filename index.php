<?php
try{
//connexion à la base de données
require 'connexion.php';
// chargement des classes
include_once 'Message.php';
require 'MessageManager.php';

/// créer class gestionnaire de message
$messageManager = new MessageManager($pdo);

// create database defi
$pdo->exec("CREATE DATABASE IF NOT EXISTS defi");

// use database defi
$pdo->exec("USE defi");

// create table messages
include_once 'create_table_messages.php';


}
catch(PDOException $e){
    
    if ($e->getCode() == 1045){
        echo "<div class='alert alert-danger w-25 m-2' role='alert'>Erreur de connexion à la base de données</div>";
    }
    else {
        echo "<div class='alert alert-danger w-25 m-2' role='alert'>Erreur : " . $e->getMessage() . "</div>";
    }
}

include_once 'homepage.php';
?>










