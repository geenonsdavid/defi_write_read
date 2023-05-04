<?PHP
$host = "localhost";
$dbName = "defi";

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;charset=utf8", "root", "");

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Création de la base de données
$pdo->exec("CREATE DATABASE IF NOT EXISTS $dbName");
$pdo->exec("USE $dbName");

// Création de la table messages
$pdo->exec("CREATE TABLE IF NOT EXISTS messages (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(255) NOT NULL,
    date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)");