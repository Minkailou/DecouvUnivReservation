<?php

 include("idcom.php");
   if(isset($_POST['valider'])){
     if(!empty($_POST['img_agence']) AND !empty($_POST['sitenom']) AND !empty($_POST['des_cri']) AND !empty($_POST['categorie'])AND !empty($_POST['prix'])){
         $img_agence = htmlspecialchars($_POST['img_agence']);
         $sitenom = htmlspecialchars($_POST['sitenom']);
         $des_cri = htmlspecialchars($_POST['des_cri']);
         $categorie = htmlspecialchars($_POST['categorie']);
         $prix = htmlspecialchars($_POST['prix']);
         

         $requete = $idcom->prepare("INSERT INTO voyages (img_agence, sitenom, des_cri, categorie, prix ) VALUES (?,?,?,?,?)");
         $requete->execute(array($img_agence, $sitenom, $des_cri, $categorie, $prix, ));

         header("location:index.php");

     }else{
         $erreur = "veillez tout remplir";
     }
     
   }
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

<!-- component -->


<div class="w-full max-w-6xl min-w-0 mx-auto px-6">
      <div class="flex mt-12 bg-white rounded-md shadow">
        <div class="w-64 bg-red-100 rounded-l-md border-r border-dashed border-red-200">
          <div class="flex justify-center items-center h-32 text-red-700 text-center font-semibold text-3xl italic">
            <a href="#"></a>
          </div>
          
        </div>
        <form action="#" method="POST" enctype="application/x-www-form-urlencoded">
        <div class="flex-grow">
          <div class="flex flex-col mx-40 mt-20">
            <div class="flex items-center mb-4">
              <label for="email" class="w-24 font-semibold text-gray-700">Images</label>
              <input type="file" class="flex-grow border border-red-200 rounded py-1 px-3" name="img_agence" accept="image/gif, image/jpeg" />
            </div>
            <div class="flex items-center mb-4">
              <label for="username" class="w-24 font-semibold text-gray-700">Nom du site</label>
              <input type="text" name="sitenom" class="flex-grow border border-red-200 rounded py-1 px-3" placeholder="Nom du site" />
            </div>
            <div class="flex items-center mb-4">
              <label for="username" class="w-24 font-semibold text-gray-700">Catégorie</label>
              <input type="text"  name="categorie" class="flex-grow border border-red-200 rounded py-1 px-3" placeholder="Catégorie" />
            </div>
            <div class="flex items-center mb-4">
              <label for="password" class="w-24 font-semibold text-gray-700">Prix</label>
              <input type="text" name="prix" class="flex-grow border border-red-200 rounded py-1 px-3" placeholder="Prix" />
            </div>
            <div class="flex items-center mb-4">
              <label for="username" class="w-24 font-semibold text-gray-700">Description</label>
              <textarea name="des_cri" class="flex-grow border border-red-200 rounded py-1 px-3" id="description" rows="8"></textarea>
            </div>
            <div class="flex items-center mb-4">
              <button type="submit" name="valider" class="py-1 px-4 bg-red-800 text-red-100 font-semibold hover:bg-red-900 hover:shadow border border-red-200 rounded mr-2">Submit</button>
              <button class="py-1 px-4 bg-white text-red-700 font-semibold hover:shadow border border-red-200 rounded">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <a href="index.php">Cliquez ici pour retourner à la page d'accueille</a>