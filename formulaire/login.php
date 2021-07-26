<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css"/>
    <title>Connexion à SFJ</title>
</head>
    <body>
    
        <div class="formu-body">

            <form action="./login_verif.php" method="post">
                <h1>Connexion</h1>

                <label><b>E-mail</b></label>
                <input type="text" placeholder="Entrez votre E-mail" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

                <input type="submit" id="submit" value="Se connecter">

                <p><b>Vous avez pas de compte? <a href="./register.php">Inscrivez vous ici.</b></a></p>
        
            </form>

        </div>
    
    </body>
</html>