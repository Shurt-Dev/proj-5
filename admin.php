<?php require_once('config.php') ?>
<html lang="en" dir="ltr">
<?php require_once('head.php') ?>
  <body>
    <?php require_once('navbar.php') ?>
    <form method="post" action="newproject.php" enctype="multipart/form-data">
      <input type='file' name='image'>
      <!-- <input type='number' name='id' /> -->
      <input type='text' name='nameImg' />
      <input type='text' name='pathFile' />
      <input type='text' name='alt' />
      <input type='submit' value='Create new project' />
    </form>
  </body>
</html>
