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

    public function addMessage(Message $content): bool
    {
        // ajoute le message
        $request = $this->pdo->prepare('INSERT INTO messages (message,date) VALUES (:message,:date)');
        $request->bindValue(':message', $content->getContent());
        $request->bindValue(':date', $content->getDate()->format('Y-m-d H:i:s'));
        $request->execute();
        return true;
    }

    // affiche message
    
    public function getMessage()
    {
        $request = $this->pdo->query('SELECT * FROM messages');
        while ($data = $request->fetch()) {
            echo "<div class='alert alert-info w-25 my-1 p-1' role='alert'>" . $data['message'] . "</br>".$data['date'].
            // créer un lien pour effacer le message en utilisant la methode deleteMessage
            "<a href='delete.php?id=" . $data['id'] . "' class='btn btn-danger m-2'>Effacer</a></div>";


        }
    }

    // afficher nombre de messages
    public function countMessage()
    {
        $request = $this->pdo->query('SELECT * FROM messages');
        echo "<div class='alert alert-primary w-25 m-0' role='alert'>Il y a " . $request->rowCount() . " messages</div>";
    }

}