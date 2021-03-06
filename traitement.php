<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./imgVoyages/log.png" rel="icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
    <link href="style.css" rel="stylesheet" />

    <title>DecouvUniv</title>
</head>
<nav class="px-6 py-2 bg-white shadow-md md:flex ">
        <div class="flex justify-between items-center">
            <div class="text-3xl text-gray-800 font-bold hover:text-gray-800">
                <a href="index.php"><img src="./imgVoyages/logo.png" alt="logo"/></a>
            </div>
            <div class="md:hidden">
                <button type="button" class="block text-gray-900 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full pb-2 md:flex md:items-center md:justify-between md:pb-0">
            <div class="flex flex-col px-2 md:flex-row">
                <a href="esp_admin.php" class="py-2 px-2 text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium md:mx-2">Insertion des données</a>
                <a href="#" class="py-2 px-2 text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium md:mx-2"></a>
                <a href="#" class="py-2 px-2 text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium md:mx-2"></a>

            </div>
            <div class=" flex item-center">
                <input type="text" class="w-full px-4 py-3 mx-4 leading-tight text-sm text-gray-400 bg-gray-900 rounded placeholder-gray-200 focus:outline-none focus:shadow-outline" placeholder="search">
                <button class="hidden text-gray-900 hover:text-gray-700 md:block">
                    <svg viewBox="0 0 30 30" class="h-6 w-6 fill-current">
                        <path d="M15 2.5C8.1 2.5 2.5 8.1 2.5 15C2.5 21.9 8.1 27.5 15 27.5C21.9 27.5 27.5 21.9 27.5 15C27.5 8.1 21.9 2.5 15 2.5ZM16.25 23.75H13.75V21.25H16.25V23.75ZM18.8375 14.0625L17.7125 15.2125C16.8125 16.125 16.25 16.875 16.25 18.75H13.75V18.125C13.75 16.75 14.3125 15.5 15.2125 14.5875L16.7625 13.0125C17.225 12.5625 17.5 11.9375 17.5 11.25C17.5 9.875 16.375 8.75 15 8.75C13.625 8.75 12.5 9.875 12.5 11.25H10C10 8.4875 12.2375 6.25 15 6.25C17.7625 6.25 20 8.4875 20 11.25C20 12.35 19.55 13.35 18.8375 14.0625Z" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

<div class="container mx-auto p-12  rounded-xl w-4/6  "> 
  <div class="sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-4 space-y-4 sm:space-y-0">

  <?php
      include('idcom.php');
    $recupArticle = $idcom->query('SELECT * FROM voyages ORDER BY id DESC');
    while($article = $recupArticle->fetch()){
   ?>
    
      
    
 
  
    <!-- Box-1 -->
   
      <div class="bg-white ">
        <div>
          <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105">
            <div>
              <img class="w-full" src='./imgVoyages/<?= "$article[img_agence]"?>' />
              <div class="px-4 py-2">
                <h1 class="text-xl font-gray-700 font-bold"><?= $article['sitenom'];?></h1>
                <div class="flex space-x-2 mt-2">
                <h3 class="text-lg text-gray-600 font-semibold mb-2"><?= $article['prix'];?></h3>
                </div>
                <p class="text-sm tracking-normal"><?= $article['des_cri'];?></p>
                <p class="text-sm tracking-normal"><a href="categorie.php?categorie=<?php echo $article['categorie'];?>"><?php echo $article['categorie'];?></a></p>

                <a href="suppr.php?id=<?= $article['id']; ?>">
                <div class="inline-block mr-2 mt-2">
                   <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">Supprimer</button>
                </div>
                    </a>
                    <a href="modifier.php?id=<?= $article['id']; ?>">
                    <div class="inline-block mr-2 mt-2">
                   <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">Modifier</button>
                </div>
                    </a>
               <!-- <button class="mt-12 w-full text-center bg-blue-200 py-2 rounded-lg">Read more</button>  -->
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <!---->
      
  
   <?php
   
  }
     
  ?>

</div>
  </div>

  <?php
    include('footer.php');
  ?>