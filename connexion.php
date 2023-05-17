<?PHP

// on est sur heroku ?
if (getenv('JAWSDB_URL') !== false){
    $url = parse_url(getenv('JAWSDB_URL'));
    $host = $url['host'];
    $dbName = ltrim($url['path'],'/');
    $user = $url['user'];
    $pass = $url['pass'];
    
}else {
    $host = "localhost";
    $dbName = "defi";
    $user = "root";
    $pass = "1234";
}

try{
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    if ($e->getCode() == 1045){
        echo "<div class='alert alert-danger w-25 m-2' role='alert'>Erreur de connexion à la base de données</div>";
    }
    else {
        echo "<div class='alert alert-danger w-25 m-2' role='alert'>Erreur : " . $e->getMessage() . "</div>";
    }
}
