
<?php
// connexion à la base de données
include_once 'connexion.php';

// Création de la base de données
$pdo->exec("CREATE DATABASE IF NOT EXISTS $dbName");
$pdo->exec("USE $dbName");

// création de la table games
$pdo->exec("CREATE TABLE IF NOT EXISTS games (
    id INT (11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    description VARCHAR(500) NOT NULL
)");

// create table errors request
$pdo->exec("CREATE TABLE IF NOT EXISTS errors (
    id INT (11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    state VARCHAR(10) NOT NULL,
    driverError VARCHAR(50),
    message VARCHAR(500)
)");

// insertion de données dans la table games

$pdo->exec("INSERT INTO games (name, description) VALUES ('The Witcher 3', 'The Witcher 3: Wild Hunt est un jeu vidéo de type action-RPG développé par le studio polonais CD Projekt RED. Annoncé en février 2013, il est sorti le 19 mai 2015 sur Windows, PlayStation 4 et Xbox One ainsi que le 15 octobre 2019 sur Nintendo Switch. Le jeu a été édité par CD Projekt, Bandai Namco Games et Warner Bros. Interactive Entertainment.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Last of Us', 'The Last of Us est un jeu vidéo d’action-aventure en vue à la troisième personne, de type survival horror, développé par Naughty Dog et édité par Sony Computer Entertainment sur PlayStation 3, sorti le 14 juin 2013. Une version remastérisée est sortie sur PlayStation 4 le 29 juillet 2014.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('Red Dead Redemption 2', 'Red Dead Redemption 2 est un jeu vidéo d’action-aventure et de western multiplateforme, développé par Rockstar Studios, et édité par Rockstar Games, sorti le 26 octobre 2018 sur PlayStation 4 et Xbox One et le 5 novembre 2019 sur Microsoft Windows. Le jeu est la préquelle de Red Dead Redemption et le troisième opus de la saga Red Dead.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('God of War', 'God of War est un jeu vidéo d’action-aventure développé par SIE Santa Monica Studio et édité par Sony Computer Entertainment, sorti le 20 avril 2018 sur PlayStation 4. Il s’agit du huitième épisode de la série God of War. Il s’agit du premier épisode de la série à ne pas être centré sur la mythologie grecque et à prendre pour cadre l’univers de la mythologie nordique quelques années après les événements de God of War III.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Legend of Zelda: Breath of the Wild', 'The Legend of Zelda: Breath of the Wild est un jeu vidéo d’action-aventure en monde ouvert développé par Nintendo EPD avec l’aide de Monolith Soft et édité par Nintendo. Il est sorti mondialement sur Nintendo Switch et Wii U le 3 mars 2017.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Elder Scrolls V: Skyrim', 'The Elder Scrolls V: Skyrim est un jeu vidéo de rôle et d’action développé par Bethesda Game Studios et édité par Bethesda Softworks, sorti le 11 novembre 2011 sur PlayStation 3, Xbox 360 et Microsoft Windows.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('Grand Theft Auto V', 'Grand Theft Auto V (plus communément abrégé GTA V) est un jeu vidéo d’action-aventure, développé par Rockstar North et édité par Rockstar Games. Il s’agit du premier titre majeur de la série des jeux vidéo Grand Theft Auto depuis la commercialisation de Grand Theft Auto IV en 2008, et d’une suite de l’univers fictif intronisé dans ce jeu.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('Uncharted 4: A Thief’s End', 'Uncharted 4: A Thief’s End est un jeu vidéo d’action-aventure développé par Naughty Dog et édité par Sony Computer Entertainment sur PlayStation 4, sorti le 10 mai 2016. Il s’agit du quatrième et dernier épisode de la série Uncharted, mettant en scène Nathan Drake.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Legend of Zelda: Ocarina of Time', 'The Legend of Zelda: Ocarina of Time est un jeu vidéo d’action-aventure développé par Nintendo EAD et édité par Nintendo sur Nintendo 64. Il est sorti le 21 novembre 1998 au Japon, le 23 novembre 1998 en Amérique du Nord et le 11 décembre 1998 en Europe.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Legend of Zelda: A Link to the Past', 'The Legend of Zelda: A Link to the Past (ou simplement A Link to the Past, ALttP, et parfois Zelda III) est un jeu d’action-aventure développé et édité par Nintendo le 21 novembre 1991 au Japon sur Super Nintendo, puis en avril 1992 aux États-Unis et en septembre 1992 en Europe.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Legend of Zelda: The Wind Waker', 'The Legend of Zelda: The Wind Waker (ou simplement The Wind Waker) est un jeu d’action-aventure développé par la division Nintendo EAD et publié par Nintendo sur GameCube le 13 décembre 2002 au Japon, puis en mars 2003 en Amérique du Nord et en mai 2003 en Europe.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Legend of Zelda: Majora’s Mask', 'The Legend of Zelda: Majora’s Mask (ou simplement Majora’s Mask, parfois abrégé MM) est un jeu d’action-aventure développé par Nintendo EAD et édité par Nintendo sur Nintendo 64. Il est sorti le 27 avril 2000 au Japon, le 26 octobre 2000 en Amérique du Nord et le 17 novembre 2000 en Europe.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Legend of Zelda: Twilight Princess', 'The Legend of Zelda: Twilight Princess (ou simplement Twilight Princess, parfois abrégé TPT) est un jeu vidéo d’action-aventure développé par Nintendo EAD et édité par Nintendo, sorti sur GameCube et Wii en 2006. Il s’agit du treizième opus de la série The Legend of Zelda.')");
$pdo->exec("INSERT INTO games (name, description) VALUES ('The Legend of Zelda: Skyward Sword', 'The Legend of Zelda: Skyward Sword (ou simplement Skyward Sword, parfois abrégé SS) est un jeu vidéo d’action-aventure développé par Nintendo EAD et édité par Nintendo, sorti sur Wii le 18 novembre 2011 en Europe.')");
