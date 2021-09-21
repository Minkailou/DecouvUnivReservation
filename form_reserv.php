<?php
include("idcom.php");
 if(isset($envoi)){
     if(!empty($date_agence)){
         $date_agence = htmlspecialchars($_POST['date_agence']);

         $requete=$idcom->prepare("INSERT INTO calendrier(date_agence) VALUES(?)");
         $requete->execute(array($date_agence));

         header("location:resevation.php");
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
    <form action="#" method="POST" enctype="application/x-www-form-urlencoded">
        <fieldset>
            <legend>Formulaire</legend>
        <table>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date_agence"></td>
            </tr>
            <tr>
            
                <td><input type="submit" name="envoi" value="Envoyer"></td>
            </tr>

        </table>
        </fieldset>
    </form>
    
</body>
</html>