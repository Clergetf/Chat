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
var_dump($_SESSION);



?>

<div class="chat">
    <div class="chatbox">
        <h1>Messages</h1>
        <div class="blockchat scroll">
        <p class="message">Message 1</p>
        <p class="message">Message 2</p>
        <p class="message">Message 3</p>
        <p class="message">Message 4</p>
        <p class="message">Message 5</p>
        <p class="message">Message 7</p>
        <p class="message">Message 8</p>
        <p class="message">Message 9</p>
        <p class="message">Message 10</p>
        <p class="message">Message 11</p>
        <p class="message">Message 12</p>
        <p class="message">Message 13</p>
        <p class="message">Message 14</p>
        <p class="message">Message 15</p>
        <p class="message">Message 16</p>
        <p class="message">Message 17</p>
        <p class="message">Message 18</p>
        <p class="message">Message 19</p>
        <p class="message">Message 20</p>
        <p class="message">Message 21</p>
        <p class="message">Message 22</p>

    </div>
        <form action="chat.php" method="post">
            <textarea class="envoimessage" name="message"></textarea>
            <button name="sendmessage" class="sendmessage" >Envoyer</button>
        </form>
    </div>
    <div class="users"><h1>Utilisateurs</h1>
    <div class="blockusers scroll">
    <p class="utilisateur"> <?php echo $_SESSION['username'] ?></p>
    <p class="utilisateur">Utilisateur 2</p>
    <p class="utilisateur">Utilisateur 3</p>
    <p class="utilisateur">Utilisateur 4</p>
    <p class="utilisateur">Utilisateur 5</p>
    <p class="utilisateur">Utilisateur 6</p>
    <p class="utilisateur">Utilisateur 7</p>
    <p class="utilisateur">Utilisateur 8</p>
    <p class="utilisateur">Utilisateur 9</p>
    <p class="utilisateur">Utilisateur 10</p>
    <p class="utilisateur">Utilisateur 11</p>
    <p class="utilisateur">Utilisateur 12</p>
    <p class="utilisateur">Utilisateur 13</p>
    <p class="utilisateur">Utilisateur 14</p>
    <p class="utilisateur">Utilisateur 15</p>
    <p class="utilisateur">Utilisateur 16</p>
    <p class="utilisateur">Utilisateur 17</p>
    <p class="utilisateur">Utilisateur 18</p>
    <p class="utilisateur">Utilisateur 19</p>
    <p class="utilisateur">Utilisateur 20</p>
    <p class="utilisateur">Utilisateur 21</p>
    <p class="utilisateur">Utilisateur 22</p>
    </div>
</div>
</div>



<?php
include 'elements/footer.php';

?>