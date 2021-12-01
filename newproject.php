<?php
require_once('config.php');
echo $_FILES['image'];
// echo $_FILES['image2'];
print_r($_FILES);
#upload_file.php
echo $_FILES['image']['name'];//affiche le nom du fichier envoyé lors du formulaire
//sauvegarder le fichier dans un dossier spécifique
$destination = "uploads/".$_FILES['image']['name']; //dossier "upload"
move_uploaded_file($_FILES['image']['tmp_name'],$destination);
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
