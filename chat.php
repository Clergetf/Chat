<?php
$title = "Chat";
require 'class/Login.php';
//require 'class/Message.php';
include 'elements/header.php';

$username = (new Login());
$pdo = (new Connexion)->getPDO();
//$sth = (new Message())->getMessage();
//$query = (new Message())->postMessage();

if (!isset($_SESSION['loggedin'])) {
    header('Location: loginform.php');
    exit;
}

if(isset($_POST['message'])) 
{
    $message = $_POST['message'];
    $date = date("F j, Y, g:i a");
    $sender = $_SESSION['username'];

    $sth=$pdo->prepare("INSERT INTO message (content,sendAt,sender) VALUES ('$message','$date','$sender')");
    $sth->execute();
}


$query= $pdo->query("SELECT content, sendAt, sender FROM message");
$utilisateur= $pdo->query("SELECT username FROM user");




?>

<div class="chat">
    <div class="chatbox">
        <h4>Messages</h4>
        <div class="blockchat scroll">
        <?php while ($entry = $query->fetchArray(SQLITE3_ASSOC) )
 {
    echo '<p id="messages" class="message">'.'Utilisateur : ' . '<strong>'.htmlentities($entry['sender']).'</strong>' . ' le ' . htmlentities($entry['sendAt']). '<br>' .
      'Message : ' . htmlentities($entry['content']) .'</p>';
} ?>
     

    </div>
        <form action="chat.php" method="post">
            <textarea class="envoimessage" name="message"></textarea>
            <button name="sendmessage" class="sendmessage" >Envoyer</button>
        </form>
    </div>
    <div class="users"><h4>Utilisateurs</h4>
    <div class="blockusers scroll">
    <?php while ($user = $utilisateur->fetchArray(SQLITE3_ASSOC) )
 {
    echo '<p class="utilisateur">'.htmlentities($user['username']).'</p>';
} ?>
    </div>
    <div><a href="logout.php">Logout</a></div>
</div>
</div>

<script src="script.js"></script>

<?php
include 'elements/footer.php';

?>
