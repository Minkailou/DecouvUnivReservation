<?php
    session_start(); // Création de la session
    include('idcom.php');
    if(isset($_POST['valider'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){

            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = htmlspecialchars($_POST['mdp']);

            $pseudo_saisi = "Minka";
            $mdp_saisi = "login1234";

            if($pseudo_saisi == $pseudo AND $mdp_saisi == $mdp){
                $_SESSION['mdp'] = $mdp_saisi; // Déclaration de la session

                header('location: traitement.php');

            }else{
                  $erreur = "<div class=\"py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200\" role=\"alert\">
                Mauvais <strong>Mots de passe</strong> reessayez!
            </div>
   ";
            }

        }else{
            $erreur = "<div class=\"py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200\" role=\"alert\">
            Veillez remplir <strong>Tous les champs</strong> ...!
        </div>
    ";
        }
    }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

    <title>Page Admin</title>
</head>
<body>
<div class="py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200" role="alert">
                Cette page <strong>est réservée aux administrateurs</strong> <a href="index.php">Cliquez ici pour retourner à <strong>la page d'accueille</strong></a>
            </div>



<div class="flex justify-center min-h-screen bg-gray-100">  
  <div class="container sm:mt-40 mt-24 my-auto max-w-md border-2 border-gray-200 p-3 bg-white">
    <!-- header -->  
    <div class="text-center my-6">
      <h1 class="text-3xl font-semibold text-gray-700">Se connecter</h1>
      <p class="text-gray-500">Se connecter pour acceder au compte</p>
    </div>
    <!-- sign-in -->
    <div class="m-6">
      <form class="mb-4" action="#" method="POST" enctype="application/x-www-form-urlencoded">
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Pseudo</label>
          <input type="text" name="pseudo" id="email" placeholder="Votre pseudo" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
          <div class="flex justify-between mb-2">
            <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Password</label>
            
          </div>
          <input type="password" name="mdp" id="password" placeholder="Votre password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
          <button type="submit" name="valider" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none duration-100 ease-in-out">Sign in</button>
        </div>
      </form> 
      <?php
   if(isset($erreur)){
       echo "<font color='red'>".$erreur."</font>";
   }
?>
      
    </div>
  </div>
</div>


    
</body>


</html>


