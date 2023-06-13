<?php
session_start();
include "configuration/commandes.php";

?> 

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form action="" method="post">
     	<h2>connexion</h2>

     	<label>email</label>
     	<input type="text" name="email"  placeholder="email" autocomplete="off"><br>

     	<label>mot de passe</label>
     	<input type="password" name="motdepasse"   placeholder="motdepasse" autocomplete="off"><br>

     	<button type="submit" name="envoyer" >Se connecter</button>
     </form>
</body>
</html>
<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
        $email = htmlspecialchars($_POST['email']) ;
        $motdepasse = htmlspecialchars($_POST['motdepasse']);

        $admin = getAdmin($email, $motdepasse);
        if($admin){
         $_session['zwuppkgTT6o0Y44']= $admin;
         header("location:admin/");

        }else{
         echo "Email ou Password est incorecte";
        }

        
        }
    }
   

?>