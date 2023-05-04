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
try {
// connexion à la base de données
include_once 'connexion.php';
// selectionner la table games
$pdo->exec('USE defi');
// si l'id est défini

if (!empty($_GET['id'])){
// récupérer l'id games
    $sql = 'SELECT * FROM games WHERE id = :id';
    $pdoStatement = $pdo->prepare($sql);
    $pdoStatement->execute([
        'id' => $_GET['id']
    ]);
    // si aucun jeu n'est trouvé
     if ($pdoStatement->rowCount() === 0) {
        echo 'Aucun jeu trouvé';
        // get games
        $pdoStatement = $pdo->query('SELECT * FROM games');
        $games = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        include_once 'affichage.php';
        }else{
            // get games
            $games = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
            // show games in a card where id = $_GET['id']
            echo '<div class="d-flex bg-dark w-25 flex-column justify-content-center">';
            include_once 'affichage.php';
            echo '<div class="d-flex align-self-center">';
            echo '<a href=delete.php?delete=games&id='.$_GET['id'].' class="btn btn-danger">Supprimer</a>';
            echo '</div>';
            echo '</div>';
            }  
}else{
    // récupérer les id des games
    $pdoStatement = $pdo->query('SELECT * FROM games');
    $games = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

    // afficher les games
    include_once 'affichage.php';
}

} catch (PDOException $e) {

    // envoyer l'erreur dans un fichier error.txt
    file_put_contents('error.txt', $e->getMessage());
    // afficher un message d'erreur
    echo 'erreur de connexion à la base de données';


}     

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>









