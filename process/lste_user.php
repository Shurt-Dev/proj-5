<?php
require_once('../component/config.php');
if (!empty($_POST['pseudo'])){
  $sql = "UPDATE user SET pseudo = '".$_POST['pseudo']."' WHERE id= '".$_POST['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  if ($_SESSION['id'] == $_POST['id']) {
    $_SESSION['pseudo']=$_POST['pseudo'];
  }
}
if (!empty($_POST['email'])){
  $sql = "UPDATE user SET email = '".$_POST['email']."' WHERE id= '".$_POST['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}
if (!empty($_POST['password'])){
  $sql = "UPDATE user SET password = '".sha1($_POST['password'])."' WHERE id= '".$_POST['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}
if (!empty($_POST['date'])){
  $sql = "UPDATE user SET date= '".$_POST['date']."' WHERE  id= '".$_POST['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}
if (!empty($_POST['isAdmin'])){
  $sql = "UPDATE user SET isAdmin = '".$_POST['isAdmin']."' WHERE  id= '".$_POST['id']."'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}

header('Location:../settings.php')
?>
