<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TM - Se connecter</title>
    <style>
        .head{
            margin-top: auto;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="head">
        <h1 class="title">
            Créer un compte
        </h1>
        <p class="desc">
            Remplissez les champs ci-dessous afin de créer votre compte. <a href="index.php">Vous avez déjà un compte?</a>
        </p> <br>
        <span>Prénom: </span><input type="text" id="name"> <br>
        <br>
        <span>Adresse e-mail: </span><input type="text" id="email"> <br>
        <br>
        <span>Créez un mot de passe: </span><input type="text" id="pass1"> <br>
        <br>
        <span>Validez le mot de passe: </span><input type="text" id="passValidate"> <br>
        <br>
        <button id="create">Créer le compte</button>
    </div>
</body>
</html>