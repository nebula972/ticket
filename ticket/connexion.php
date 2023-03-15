<?php
session_start();
if(isset($_POST["bout"]))
{
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];
    $id = mysqli_connect("127.0.0.1","root","","ticketyohan");
    $req = "select * from users where pseudo = '$pseudo' and mdp = '$mdp'";
    $res = mysqli_query($id, $req);
    if(mysqli_num_rows($res)>0)
    {
        $_SESSION["pseudo"] = $pseudo;
        header("location:ticket.php");
    }else{
        echo "<h3>Erreur de pseudo ou mot de passe !!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Connexion au S.A.V.</h1><hr><br>
    <form action="" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo :"><br><br>
        <input type="password" name="mdp" placeholder="Mot de passe :"><br><br>
        <input type="submit" value="Connexion" name="bout">
    </form><br><hr>

</body>
</html>