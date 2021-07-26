<?php


$pdo = (new Connexion)->getPDO();

$query= $pdo->query("SELECT content, sendAt, sender FROM message");
while ($entry = $query->fetchArray(SQLITE3_ASSOC) )
 {
    echo '<p id="messages" class="message">'.'Utilisateur : ' . '<strong>'.htmlentities($entry['sender']).'</strong>' . ' ' . htmlentities($entry['sendAt']). '<br>' .
      'Message : ' . htmlentities($entry['content']) .'</p>';
} 

$pdo->close();

?>