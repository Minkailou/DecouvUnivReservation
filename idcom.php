<?php

$servername = "localhost";
$username = "root";
$password = "";

try{
$idcom = new PDO("mysql:host = $servername; dbname=agences", $username, $password);
$idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $erreur = "Connexion réussie avec succés";
}
catch(PDOException $e){
    $erreur = "Error de connexion". $e->getMessage();
}

if(isset($erreur)){
    echo "<font color='red'>".$erreur."</font>"; 
}
 
?>