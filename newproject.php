<?php
require_once('config.php');
$sql = "INSERT INTO images(nameImg,alt,pathFile) VALUES(:nameImg,:alt,:pathFile)";
print_r($_FILES);
$dataBinded=array(
    ':nameImg' => $_FILES['image'],
    ':alt'=> $_POST['alt'],
    ':pathFile'=> $_POST['pathFile'],
    /*':id'=> $_POST['id']*/
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//:email et :password sont bindés dans ma requêtes
//mon tableau dataBinded réutilise ces clés bindées :email et :password
//la donnée est liée au bind !
//lorsqu'on execute la requête, on indique à quelles données correspondent chaque "bind"
echo $_FILES['image']['name'];        //affiche le nom du fichier envoyé lors du formulaire
$destination = $_POST['pathFile'].$_FILES['image']['name']; //dossier "upload"
move_uploaded_file($_FILES['image']['tmp_name'],$destination);
