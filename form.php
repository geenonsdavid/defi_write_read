<?php

echo '<form class="w-25" method="POST" action="">';
echo '<label for="message" class="form-label form-control-lg">Message :</label>';
echo '<textarea name="message" id="message" cols="30" rows="1" class="form-control"></textarea>';
echo '<button type="submit" class="btn btn-primary m-2">Envoyer</button>';
echo '</form>';

// créer new message
if (!empty($_POST['message'])) {
    $message = new Message($_POST['message']);
    $messageManager->addMessage($message);
    header('Location: index.php');
}