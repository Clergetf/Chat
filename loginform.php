<?php
$title = "Login";
include 'elements/header.php';
require 'class/Login.php';

$query = (new Login())->log_in();

?>



<header class="area"><h1>Formulaire de connexion</h1></header>

<div class="d-flex justify-content-center mt-5">
    <form action="loginform.php" method="post">
        <div class="form-group">
            <label>Username :</label>
            <input type="text" name="username" placeholder="Votre pseudo" required="required" class="form-control"> 
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input type="password" name="password" placeholder="Votre mot de passe" required="required" class="form-control">
        </div>
        <div class="text-center">
            <button name="login" class="btn-primary">Connexion</button></button>
        </div>
    </form>
</div>



<?php
include 'elements/footer.php';

?>