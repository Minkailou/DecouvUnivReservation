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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST" enctype="application/x-www-form-urlencoded">
        <fieldset>
            <legend>Ajout des données</legend>
            <table>
                  <tr>
                      <td>Images</td>
                      <td><input type="file" name="img_agence"  accept="image/gif, image/jpeg" placeholder="Images place"></td>
                  </tr>
                  <tr>
                      <td>Sites</td>
                      <td><input type="text" name="sitenom" placeholder="Nom du site"></td>
                  </tr>
                  <tr>
                      <td>Description</td>
                      <td><textarea  name="des_cri"  placeholder="Description"></textarea></td>
                  </tr>
                  <tr>
                      <td>categorie</td>
                      <td><input type="text" name="categorie" placeholder="Categorie"></td>
                  </tr>
                  <tr>
                      <td>Prix</td>
                      <td><input type="text" name="prix" placeholder="Prix"></td>
                  </tr>
                  
                  <tr>
                      
                      <td><input type="submit" name="valider"  value="Envoyer"></td>
                  </tr>


            </table>
        </fieldset>
    </form>
    
</body>
<?php
 if(isset($erreur)){
     echo "<font color='red'>".$erreur."</font>";
 }
?>
</html>