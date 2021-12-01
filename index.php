<?php require_once('component/config.php'); ?>
<html lang="en" dir="ltr">
  <?php require_once('component/head.php'); ?>
  <body class="center ">
    <div class="ok">
      <?php
        require_once('component/navbar.php');
        require_once('component/presentation.php');
      ?>

      <div class="row">
        <div class="col s10 m6 l4 offset-s1 offset-m3 offset-l4 lime lighten-5">
          <h1 class="center-align flow-text ">Because it's our Projects!</h1>
        </div>
      </div>

      <?php
      require_once('component/presentationprojet.php');
      if(!empty($_SESSION['user']))
      {
        if($_SESSION['isAdmin'] == 1){
          require_once('process/newproject.php');
        }
      }
      ?>
    </div>

  <?php
  require_once('component/modal.php');
  require_once('component/js.php'); ?>

  </body>
</html>
