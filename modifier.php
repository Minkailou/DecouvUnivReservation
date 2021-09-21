<?php
session_start();
if(!$_SESSION['mdp']){
    header('location:pageAdmin.php');
}
include('idcom.php');
if (isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];

    $recuArticle = $idcom->prepare('SELECT * FROM voyages WHERE id = ?');
    $recuArticle->execute(array($getid));
    if($recuArticle->rowCount() > 0){
        $articleInfos = $recuArticle->fetch();
        $img_agence = $articleInfos['img_agence'];
        $sitenom = $articleInfos['sitenom'];
        $des_cri = $articleInfos['des_cri'];
        $categorie = $articleInfos['categorie'];
        $prix = $articleInfos['prix'];

        if(isset($_POST['valider'])){
           

            $img_saisie = htmlspecialchars($_POST['img_agence']);
            $sitenom_saisie = htmlspecialchars($_POST['sitenom']);
            $des_cri_saisie = nl2br(htmlspecialchars($_POST['des_cri']));
            $categorie_saisie = htmlspecialchars($_POST['categorie']);
            $prix_saisie = htmlspecialchars($_POST['prix']);
    
            $updateArticle = $idcom->prepare('UPDATE voyages SET img_agence = ?, sitenom = ? , des_cri = ? , categorie = ? , prix = ? WHERE id = ?');
            $updateArticle->execute(array($img_saisie, $sitenom_saisie, $des_cri_saisie, $categorie_saisie, $prix_saisie, $getid));
            
            header('location: index.php');

        
        }

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
                      <td><input type="file" name="img_agence"value="<?= $img_agence; ?>" accept="image/gif, image/jpeg" placeholder="Images place"></td>
                  </tr>
                  <tr>
                      <td>Sites</td>
                      <td><input type="text" value="<?= $sitenom; ?>"name="sitenom"></td>
                  </tr>
                  <tr>
                      <td>Description</td>
                      <td><input type="text"  name="des_cri" value="<?= $des_cri; ?>"></td>
                  </tr>
                  <tr>
                      <td>categorie</td>
                      <td><input type="text" name="categorie" value="<?= $categorie; ?>"></td>
                  </tr>
                  <tr>
                      <td>Prix</td>
                      <td><input type="text" name="prix" value="<?= $prix ;?>"></td>
                  </tr>
                  
                  <tr>
                      
                      <td><input type="submit" name="valider"  value="Envoyer"></td>
                  </tr>


            </table>
        </fieldset>
    </form>
    
</body>

</html>