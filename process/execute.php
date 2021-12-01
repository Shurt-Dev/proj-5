<?php
require_once('../component/config.php');
$sql = "INSERT INTO images(parallax,altPar,img,pathFile,alt) VALUES(:parallax,:altPar,:img,:pathFile,:alt)";
$dataBinded=array(
':parallax'=> $_POST['parallax'],
':altPar'=> $_POST['altPar'],
':img'=> $_POST['img'],
':alt'=> $_POST['alt'],
':pathFile'=> $_POST['pathFile']);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

echo $_FILES['image']['name'];//affiche le nom du fichier envoyé lors du formulaire
//sauvegarder le fichier dans un dossier spécifique
$destination = "upload/".$_FILES['image']['name']; //dossier "upload"
move_uploaded_file($_FILES['image']['tmp_name'],$destination);
//header('Location:../index.php');
header('Location:../index.php')
?>
