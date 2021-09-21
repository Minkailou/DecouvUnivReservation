<?php
   include('header.php');
?>


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