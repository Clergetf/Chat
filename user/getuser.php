<?php

$pdo = (new Connexion)->getPDO();

$utilisateur= $pdo->query("SELECT username FROM user");

while ($user = $utilisateur->fetchArray(SQLITE3_ASSOC) )
 {
    echo '<p class="utilisateur">'.htmlentities($user['username']).'</p>';
}

$pdo->close();

?>