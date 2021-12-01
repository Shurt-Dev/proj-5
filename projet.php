<?php require_once('component/config.php') ?>
<html lang="en" dir="ltr">
  <?php require_once('component/head.php') ?>
  <body class="center">
    <div class="ok">
      <?php require_once('component/navbar.php') ?>
      <div class="row"><?php
      $sql = "
      SELECT *
      FROM projet
      WHERE idProjet ='".$_GET['projet']."'
      ORDER BY id
      ";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetchAll(PDO::FETCH_ASSOC);?>
        <div class="col s12 m8 offset-m2 l6 offset-l3">
          <h1 class="color-white"><?php /*$_GET['projet'] */?></h1>
          <div class="carousel carousel-slider">
            <?php foreach ($data as $image){ ?>
            <a class="carousel-item" href="<?php echo "#".$image['href']."!";?>"><img src="<?php echo $image['url']; ?>" alt=""></a>
            <?php } ?>
          </div>
        </div>
        <div class="col s12 m8 offset-m2 l8 offset-l2 hoverable red darken-3">
          <div class="card">
          <?php foreach ($data as $image){ ?>
            <p <?php echo"class='".$image['href']."'" ?>><?php echo $image['text']; ?></p>
          <?php } ?>
            <hr>
            <h2>Description</h2>
            <hr>
            <?php
            $sql = "
            SELECT *
            FROM text
            WHERE idProjet ='".$_GET['projet']."'
            ";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $data = $pre->fetchAll(PDO::FETCH_ASSOC);?>
            <?php foreach ($data as $text): ?>
              <p><?php echo $text['text'] ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <?php require_once('component/modal.php') ?>
    <?php require_once('component/js.php') ?>
  </body>
</html>
