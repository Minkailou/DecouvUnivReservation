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

         echo "<div class=\"container mx-auto px-4 sm:px-8\">";
         echo "<div class=\"py-8\">";
          echo " <div>";
            echo " <h2 class=\"text-2xl font-semibold leading-tight\">Il y a $nbart articles correspondant au mot-clé : $motcle</h2>";
             echo " </div>";
                echo "<div class=\"-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto\">";
                    echo "<div class=\"inline-block min-w-full shadow rounded-lg overflow-hidden\">";
                        echo "<table class=\"min-w-full leading-normal\">";
                            echo"<thead>";
                          
                            
                             echo "<tr>";
                                  foreach($titres as $val)
                                  {
                                   
                                   echo " <th
                                        class=\"px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider\">" , htmlentities($val),
                                        
                                    "</th>";
                                   } 
                                echo"</tr>";
                               echo"<thead>";
                                 do
                                 {
                                 
                                   echo"<tr>";
        
                                  foreach($ligne as $donnees)
                                  {
                                     echo"<td class=\"px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5\">",$donnees,"</td>";
                                  }
                                    
                                  echo"</tr>";
                                }
                                while($ligne=$result->fetch(PDO::FETCH_NUM));
                              }
                             
                        echo"</table>";
                         $result->closeCursor();
                         $idcom=null;
             }
             
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
        
?>
<?php
   include('footer.php');
?>






