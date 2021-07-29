<?php session_start(); 
$user2 = $_COOKIE['user2'];
$user1 = $_SESSION['username'];
$message = $_POST['privatemessage'];
$date = date("F j, Y, g:i a");


?>

From <?= $user1 .' '. ' le ' . $date . '<br>' . $_POST['privatemessage'] . ' pour ' . $user2?>


<?php

?>