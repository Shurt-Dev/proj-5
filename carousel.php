<?php
require_once('config.php');
$sql = "
    SELECT nameImg, pathFile, alt
    FROM images
    WHERE nameImg NOT LIKE '%pfp%'
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);?>
<div class="col s12 m8 offset-m2 l6 offset-l3">
  <h1 class="color-white"><?php $_GET['projet'] ?></h1>
  <?php
  foreach ($data as $image){
    ?>
    <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="<?php $image['pathFile'] ?>" alt="<?php $image['alt'] ?>"></a>
  <?php } ?>
  </div>
</div>
