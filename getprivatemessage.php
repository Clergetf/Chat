<?php

$pdo = (new Connexion)->getPDO();

if (isset($_POST['privatemessage'])) {
    $message = htmlspecialchars($_POST['privatemessage']);
    $date = date("F j, Y, g:i a");
    $sender = $_SESSION['username'];
    $user2 = '';
    var_dump($value);
    

    $sth=$pdo->prepare("INSERT INTO private (user1, user2, content,sendAt) VALUES ('$sender', '$user2', '$message','$date')");
    $sth->execute();
}

$pdo->close();

?>