<?php
$title ="Register";
include 'elements/header.php';
require 'class/Register.php';


$sth = (new Register());



?>



<header class="area"><h1>Formulaire d'enregistrement</h1></header>

<div class="d-flex justify-content-center mt-5">
    <form action="registerform.php" method="post">
        <div class="form-group">
            <label>Username :</label>
            <input type="text" name="username" class="form-control" required="required"> 
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input type="password" name="password" class="form-control" required="required">
        </div>
        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email" class="form-control" required="required">
        </div> 
        <div class="text-center">
            <button name="register" class="btn-success">Register</button>
        </div>
    </form>
</div>




<?php
include 'elements/footer.php';

?>