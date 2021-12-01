<?php
require_once('config.php');
$sql = "
    SELECT *
    FROM images
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);?>
<div class="col s12 m8 offset-m2 l6 offset-l3">
  <h1 class="color-white"><?php /*$_GET['projet'] */?></h1>
  <div class="carousel carousel-slider">
    <?php foreach ($data as $image){ ?>
    <a class="carousel-item" href="#<?php echo $image['href']; ?>"><img src="<?php echo $image['pathFile']; ?>" alt="<?php echo $image['alt']; ?>"></a>
    <?php } ?>
  </div>
</div>
