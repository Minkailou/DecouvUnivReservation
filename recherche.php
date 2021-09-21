<?php
     include('idcom.php');
     include('header.php');
    


   if(!empty($_POST['motcle']))
   {
    
     $motcle=strtolower(($_POST['motcle']));
     $categorie=addslashes($_POST['categorie']);
     $ordre=($_POST['ordre']);
     $tri=($_POST['tri']);

     //Réquete SQL
     $reqcategorie=($_POST['categorie']=="tous")?"":"AND categorie='$categorie'";
     $requete="SELECT id AS 'Code article' ,sitenom AS 'sitenom', categorie AS
     'categorie' FROM voyages WHERE lower (categorie) LIKE lower('%$motcle%')"
     .$reqcategorie."ORDER BY $tri $ordre";
     $result=$idcom->query($requete);
     
     if(!$result)
     {
         echo "Lecture impossible";
     }
     else
     {
         $nbcol=$result->columnCount();
         $nbart=$result->rowCount();
         if($nbart==0)
         {

         echo " <h3> il y a $nbart article correspondant au mot-clé :$motcle</h3>";
         exit;
         }

         $ligne=$result->fetch(PDO::FETCH_ASSOC);
         $titres=array_keys($ligne);
         $ligne=array_values($ligne);

         echo "<h3> il y a $nbart articles correspondant au mot-clé : $motcle</h3>";
         
         echo"<table border=\"1\"><tr>";
          foreach($titres as $val)
         {
             echo"<th>", htmlentities($val),"</th>";

         }
         echo "</tr>";

        do
        {
            
            echo"<tr>";

            foreach($ligne as $donnees)
            {
                echo "<td>",$donnees,"</td>";
            }

            echo "</tr>";
        }
         while($ligne=$result->fetch(PDO::FETCH_NUM));
     } 
        echo "</table>";
        $result->closeCursor();
        $idcom=null;
     }
     
     include("footer.php");  
?>






