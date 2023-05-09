<?php
// créer une class MessageManager
// qui contient une méthode addMessage (string $content) qui permet d'ajouter un message dans la base de données.
// Cette méthode dois retourner vrai
// si le message a bien été ajouté, faux sinon.


class MessageManager
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addMessage(string $content): bool
    {
        $request = $this->pdo->prepare('INSERT INTO messages (message) VALUES (:message)');
        $request->bindParam(':message', $content);
        return $request->execute();
    }
}