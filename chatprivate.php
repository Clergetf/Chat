<?php session_start(); 
$date = date("F j, Y, g:i a")?>

From <?= $_SESSION['username'] .' '. ' le ' . $date . '<br>' . $_POST['privatemessage']?>