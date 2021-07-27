<?php
$title = "Chat";
require 'class/Login.php';
include 'elements/header.php';

$username = (new Login());
$pdo = (new Connexion)->getPDO();


if (!isset($_SESSION['loggedin'])) {
    header('Location: loginform.php');
    exit;
}
require 'getmessage.php';
?>

<div id="chatplace" class="chat">
    <div class="chatbox">
        <h4>Messages</h4>
        <div id="chatbox" class="blockchat scroll">
            <div id="chatbox">
        <?php include 'chatlog.php'; ?>
        </div>
     

    </div>
    </div>

    <div class="users"><h4>Utilisateurs</h4>
    <div class="blockusers scroll">
    <?php include 'getuser.php'; ?>
    </div>

    <div><a class="text-decoration-none" href="logout.php"><button type="button">Logout</button></a></div>
</div>

<div>        
    <form class="messagebox" action="chat.php" method="post">
            <textarea id ="usrmsg" class="envoimessage" name="message"></textarea>
            <button type="submit" id="chatSubmit" name="sendmessage" class="sendmessage" >Envoyer</button>
        </form>
    </div>
</div>

<script src="script.js"></script>

<?php
include 'elements/footer.php';

?>