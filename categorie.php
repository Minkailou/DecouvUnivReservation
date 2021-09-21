<?php
include('idcom.php');
include('header.php');

if (isset($_GET['categorie']) AND !empty($_GET['categorie'])){
    
$cat = $_GET['categorie'];

// $cat="vacances"; 
?>
 
<div class="container mx-auto p-12  rounded-xl w-4/6  "> 
  <div class="sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-4 space-y-4 sm:space-y-0">

  <?php

    $recuArticle = $idcom->prepare("SELECT * FROM voyages WHERE categorie  ='$cat'");
    $recuArticle->execute();
    while($article = $recuArticle->fetch()){

     ?>   
      
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
               <a href="#"><button class="mt-12 w-full text-center bg-blue-200 py-2 rounded-lg">Read more</button></a> 
              
              </div>
            </div>
          </div>
        </div>
      </div>

     
      <?php
        
        }

       
        
    }
?>
</div>
  </div>

<?php
  include('footer.php');
?>