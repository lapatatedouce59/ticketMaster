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
            Ticket Master
        </h1>
        <p class="desc">
            Connectez-vous à votre compte Ticket Master ou <a href="register.php">créez un compte ici</a>.
        </p> <br>
        <form name="f1" action = "auth.php" onsubmit = "return validation()" method = "POST">
        <span>Identifiant: </span><input type="text" id="id" name="id"> <br>
        <br>
        <span>Mot de passe: </span><input type="text" id="pass" name="pass"> <br>
        <br>
        <span>StaffPass: </span><input type="text" id="staffpass"> <br>
        <br>
        <input type="submit" id="validate" value="Se connecter">
        </form> 
    </div>

    <script>  
            function validation()  
            {  
                let id=document.f1.id.value;  
                let ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                }                             
            }  
        </script>  
</body>
</html>