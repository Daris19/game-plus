<?php


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Vérifier que les champs obligatoires sont remplis
    if(empty($name) || empty($email) || empty($password) || empty($cpassword)){
        $message[] = 'Tous les champs sont obligatoires';
    }
    // Vérifier que les mots de passe correspondent
    else if($password != $cpassword){
        $message[] = 'Les mots de passe ne correspondent pas';
    }
    // Vérifier que l'adresse e-mail est valide
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $message[] = 'Adresse e-mail invalide';
    }
    else {
        // Connexion à la base de données
        try {
            $access=new pdo("mysql:host=localhost;dbname=game plus;charset=utf8", "root", "");
            
            $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
    } catch (Exception $e) 
    {
        $e->getMessage();
    }
        
        }

        // Vérifier si l'utilisateur existe déjà dans la base de données
        $select = mysqli_prepare($conn, "SELECT * FROM `user_form` WHERE email = ?");
        mysqli_stmt_bind_param($select, "s", $email);
        mysqli_stmt_execute($select);
        $result = mysqli_stmt_get_result($select);

        if(mysqli_num_rows($result) > 0){
            $message[] = 'L\'utilisateur existe déjà';
        }
        else {
            // Hacher le mot de passe
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insérer les données utilisateur dans la base de données
            $insert = mysqli_prepare($conn, "INSERT INTO `user_form`(name, email, password) VALUES(?, ?, ?)");
            mysqli_stmt_bind_param($insert, "sss", $name, $email, $hashed_password);
            mysqli_stmt_execute($insert);

            $message[] = 'Utilisateur enregistré avec succès';
            header('Location: login.php');
            exit();
        }

        mysqli_close($conn);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>inscription</h3>
      <input type="text" name="name" required placeholder="enter username" class="box">
      <input type="email" name="email" required placeholder="enter email" class="box">
      <input type="password" name="password" required placeholder="enter password" class="box">
      <input type="password" name="cpassword" required placeholder="confirm password" class="box">
      <input type="submit" name="submit" class="btn" value="s'inscrire">
      <p>Vous avez deja un compte? <a href="login.php">connecter-vous</a></p>
   </form>

</div>

</body>
</html>