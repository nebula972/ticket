<?php
session_start();
if(!isset($_SESSION["pseudo"]))
{
    header("location:connexion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ticket.css">
</head>
<body>
    <h1>Bonjour <?php echo $_SESSION["pseudo"]?>, Voici la liste des taches ! </h1><br><br>
    <table>
        <tr>
            <th>#</th><th>Nom</th><th>Etat</th>
            <th>Actions</th>
        </tr>
    <?php
    $id = mysqli_connect("127.0.0.1","root","","ticketyohan");
    $req = "select * from sav";
    $resultat = mysqli_query($id, $req);
    while($ligne = mysqli_fetch_assoc($resultat))
    {
        $req2 = "SELECT * etat FROM sav order by idc";
        $res2 = mysqli_query($id, $req2);
        if($ligne["etat"] == "En attente"){
            echo "<tr>
                <td>".$ligne["idc"]."</td>
                <td>".$ligne["prbl"]."</td>
                <td>".$ligne["etat"]."</td>
                <td><a href='play.php?idc=".$ligne["idc"]."'><img src='play.png' width='30'></a>
                <a href='valide.php?idc=".$ligne["idc"]."'><img src='valide.png' width='38'></a></td>
        </tr>";
        }elseif($ligne["etat"] == "En cours"){
            echo "<tr>
                <td>".$ligne["idc"]."</td>
                <td>".$ligne["prbl"]."</td>
                <td>".$ligne["etat"]."</td>
                <td><a href='pause.php?idc=".$ligne["idc"]."'><img src='pause.png' width='30'></a>
                <a href='valide.php?idc=".$ligne["idc"]."'><img src='valide.png' width='38'></a></td>
        </tr>";
        }elseif($ligne["etat"] == "Termine"){
            echo "<tr>
                <td>".$ligne["idc"]."</td>
                <td>".$ligne["prbl"]."</td>
                <td>".$ligne["etat"]."</td>
                <td><a href='pause.php?idc=".$ligne["idc"]."'><img src='pause.png' width='30'></a>
                <a href='play.php?idc=".$ligne["idc"]."'><img src='play.png' width='32'></a></td>
        </tr>";
        }
    }
    ?>
    </table>
</body>
</html>