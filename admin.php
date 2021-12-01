<?php require_once('config.php') ?>
<html lang="en" dir="ltr">
<?php require_once('head.php') ?>
  <body>
    <?php require_once('navbar.php') ?>
    <form method="post" action="newproject.php" enctype="multipart/form-data">
      <input type='file' name='image'>
      <!-- <input type='text' name='parallax'>
      <input type='text' name='pathFilePar'>
      <input type='text' name='altPar'> -->
      <!-- <input type='file' name='image2'> -->
      <!-- <input type='text' name='img'>
      <input type='text' name='pathFile'>
      <input type='text' name='alt'> -->
      <input type='submit' value='Create new project' />
    </form>
  </body>
</html>
