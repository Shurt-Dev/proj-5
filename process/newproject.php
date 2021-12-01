<?php
// require_once('../component/config.php');
// echo $_FILES['image'];
// echo $_FILES['image2'];
// print_r($_FILES);
// #upload_file.php
// echo $_FILES['image']['name'];//affiche le nom du fichier envoyé lors du formulaire
// //sauvegarder le fichier dans un dossier spécifique
// $destination = "uploads/".$_FILES['image']['name']; //dossier "upload"
// move_uploaded_file($_FILES['image']['tmp_name'],$destination);

// echo $_FILES['image2']['name'];//affiche le nom du fichier envoyé lors du formulaire
// //sauvegarder le fichier dans un dossier spécifique
// $destination = "upload/".$_FILES['image2']['name']; //dossier "upload"
// move_uploaded_file($_FILES['image2']['tmp_name'],$destination)

// $sql = "INSERT INTO images(parallax,pathFilePar,altPar,img,pathFile,alt) VALUES(:parallax,:pathFilePar,:altPar,:img,:pathFile,:alt)";
// $dataBinded=array(
//     ':nameImg' => $_FILES['image'],
//     ':alt'=> $_POST['alt'],
//     ':pathFile'=> $_POST['pathFile'],
// );
// $pre = $pdo->prepare($sql);
// $pre->execute($dataBinded);

// $destination = $_POST['pathFile'].$_FILES['image']['name'];
// move_uploaded_file($_FILES['image']['tmp_name'],$destination);
?>
<div class="purple">
  <form class="" action="execute.php" method="post"  enctype="multipart/form-data">
    <input type="text" name="parallax" value="">
    <label for="parallax">parallax</label>

    <input type="text" name="altPar" value="">
    <label for="altPar">altPar</label>

    <input type="text" name="img" value="">
    <label for="img">img</label>

    <input type="text" name="pathFile" value="">
    <label for="pathFile">pathFile</label>

    <input type="text" name="alt" value="">
    <label for="alt">alt</label>

    <input type='file' name='image' multiple="true">

    <input type="submit" value="submit">
  </form>
</div>
