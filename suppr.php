<?php
 include('idcom.php');

  
  if (isset($_GET['id']) AND !empty($_GET['id'])){
        $getid = $_GET['id'];
         $recuArticle = $idcom->prepare('SELECT * FROM voyages WHERE id = ?');
         $recuArticle->execute(array($getid));
        if($recuArticle->rowCount() > 0){
         $deleteArticle = $idcom->prepare('DELETE FROM voyages WHERE id = ?');
          $deleteArticle->execute(array($getid));

          

           header('location: index.php');
          
      }
      else{
          echo " Aucun article trouvé";
      }

    }
   
  ?>