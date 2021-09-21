
<body>
    <!-- NAVBAR -->

    

    <!-- RECHERCHE -->
    <form action="recherche.php" method="post" >
    
  <div class=" overflow-hidden relative bg-cover bg-center  h-auto text-white py-24 px-10 object-fill absolute bg-gradient-to-tr from-yellow-400 via-red-500 to-pink-500 w-full h-1/2 z-0 top-0" style="background-image: url('./imgVoyages/pirogue.jpg');border-bottom-left-radius: 50% 20%; border-bottom-right-radius: 50% 20%;">
  
</div>
  <div class="absolute inset-x-auto w-full z-10">
    <div class="w-2/3 mx-auto shadow-md rounded-md p-4 bg-white -my-14 ">
      
      <div class="flex gap-2 flex-col md:flex-row center ">
        <div class="relative flex-1">
          <input id="departure" value="Recherche" name="motcle" type="text" class="peer h-10 w-full border border-1.5 rounded-md border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-red-600 focus:border-2 p-3" placeholder="quelquechose" />
          <label for="departure" class="absolute left-2 px-1 -top-2.5 bg-white text-blue-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-900 peer-placeholder-shown:top-2 peer-focus:-top-2.5 peer-focus:text-red-600 peer-focus:text-sm">Catégorie :</label>
          <select name="categorie">
                           <option value="tous">Tous</option>
                           <option value="vacance">Vacance</option>
                           <option value="les alpes en étè">Les alpes en étè</option>
                           <option value="ski dans les alpes">Ski dans les alpes</option>
                           <option value="partir au soleil">Partir au soleil </option>
                           <option value="les iles">Les iles</option>
                        </select>
                        <select name="tri">
                            <option value="prix">Prix</option>
                            <option value="categorie">Catégorie</option>
                            <option value="id">Code</option>
                        </select>
                        <input type="radio" name="ordre" value="ASC" checked="checked" />
                        <input type="radio" name="ordre" value="DESC" />
          <div class="absolute right-0 top-0 mt-2 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <div class="relative self-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2 h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
          </svg>
        </div>
        <div class="relative flex-1">
          <input id="arrival" name="arrival" type="text" class="peer h-10 w-full border border-1.5 rounded-md border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-red-600 focus:border-2 p-3" placeholder="quelquechose" />
          <label for="arrival" class="absolute left-2 px-1 -top-2.5 bg-white text-blue-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-900 peer-placeholder-shown:top-2 peer-focus:-top-2.5 peer-focus:text-red-600 peer-focus:text-sm">Arrivée :</label>
        </div>
        <div></div>
        <div class="relative flex-1">
          <input id="eta" value="20/07/2021 à 06h" name="eta" type="text" class="peer h-10 w-full border border-1.5 rounded-md border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-red-600 focus:border-2 p-3" placeholder="quelquechose" />
          <label for="eta" class="absolute left-2 px-1 -top-2.5 bg-white text-blue-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-900 peer-placeholder-shown:top-2 peer-focus:-top-2.5 peer-focus:text-red-600 peer-focus:text-sm">Date aller</label>
          <div class="absolute right-0 top-0 mt-2 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
        </div>
        <div class="relative flex-1">
          <input id="etd" name="etd" type="text" class="peer h-10 w-full border border-1.5 rounded-md border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-red-600 focus:border-2 p-3" placeholder="quelquechose" />
          <label for="etd" class="absolute left-2 px-1 -top-2.5 bg-white text-blue-500 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-200 peer-placeholder-shown:top-2 peer-focus:-top-2.5 peer-focus:text-red-600 peer-focus:text-sm">Date retour</label>
          <div class="absolute right-0 top-0 mt-2 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-6">
        <button class="bg-blue-200 text-black font-extrabold text-lg rounded-full px-6 py-3" type="submit">Rechercher</button>
      </div>
    </div>
  </div>
</div>
 <div class="w-full mx-auto py-16 ml-30 ">

 
     </form>


  
   <!-- Les barres de taches-->

      <div class="w-4/6 text-center mx-auto mt-20  ">
      <h1 class="titre"><b>Visitez les plus belles destinations</b></h1> 
        
        <button
          type="button"
          class="border border-gray-700 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 hover:text-white  focus:outline-none focus:shadow-outline"
        >
          Europe et Côtes Méditerranéennes
        </button>
        <button
          type="button"
          class="border border-gray-700 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 hover:text-white  focus:outline-none focus:shadow-outline"
        >
          Les Alpes
        </button>
        <button
          type="button"
          class="border border-gray-700 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 hover:text-white  focus:outline-none focus:shadow-outline"
        >
          Caraibes et Amérique du Nord
        </button>
        <button
          type="button"
          class="border border-gray-700 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 hover:text-white  focus:outline-none focus:shadow-outline"
        >
          Afrique et Moyen-Orient
        </button>
        <button
          type="button"
          class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline"
        >
          Asie et Océan Indien
        </button>
        <button
          type="button"
          class="border border-gray-700 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 hover:text-white focus:outline-none focus:shadow-outline"
        >
          Amerique Centrale et du Sud
        </button>
      </div>
    </div>
     
  </div>

    <!-- component -->
 
          
    
    
    
    
    
    
                

        <!-- CARTES -->

  

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
                <h3 class="text-lg text-red-600 font-semibold mb-2"><?= $article['prix'];?></h3>
                </div>
                <p class="text-sm tracking-normal"><?= $article['des_cri'];?></p>
                <h1 class="text-xl font-gray-700 font-bold"><a href="categorie.php?categorie=<?php echo $article['categorie'];?>"><?php echo $article['categorie'];?></a></h1>
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