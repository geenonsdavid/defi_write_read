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
try{

require 'connexion.php';
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

// créer un nouveau message
include_once 'form.php';

// affiche nombre de messages
$messageManager->countMessage();

// afficher les messages
$messageManager->getMessage();

}
catch(PDOException $e){
    
    if ($e->getCode() == 1045){
        echo "<div class='alert alert-danger w-25 m-2' role='alert'>Erreur de connexion à la base de données</div>";
    }
    else {
        echo "<div class='alert alert-danger w-25 m-2' role='alert'>Erreur : " . $e->getMessage() . "</div>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>









