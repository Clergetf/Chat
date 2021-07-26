<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
    <link rel="stylesheet" href="../css/register.css" media="screen" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription à SFJ</title>
</head>
    <body>
    
        <div class="formu-body">
            <form action="./register_verif" method="post">

                <h1>Inscription</h1>

                <label><b>E-mail</b></label>
                <input type="text" placeholder="Entrez votre e-mail" name="email" required autocomplete="off">

                <label><b>Pseudo</b></label>
                <input type="text" placeholder="Entrez votre pseudo" name="username" required autocomplete="off">

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entre votre mot de passe" name="password" required autocomplete="off">

                <label><b>Répetez le mot de passe</b></label>
                <input type="password" placeholder="Répetez votre mot de passe" name=="repeat-password" required autocomplete="off"> 

                <input type="submit" id="submit" value="S'inscrire">

                <p><b>Vous avez déjà un compte? <a href="./login.php">Connecter vous ici</b></a></p>
            </form>
        </div>

    </body>
</html>