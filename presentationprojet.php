<?php require_once('config.php');

$sql = "
    SELECT nameImg, pathFile, alt
    FROM images
    WHERE nameImg NOT LIKE '%pfp%'
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
$nbritem = count($data);
if ($nbritem/2 != 0){
foreach($data as $images){?>
      <?php
      if (strpos($data1['nameImg'],"parallax") != 0){
        ?>
        <div class="parallax-container">
        <div class="parallax">
          <img src="<?php $data1['pathFile'].$data1['nameImg'] ?>" alt=" <?php $data1['alt'] ?>">
        </div>
      <?php ;} ?>
    </div>
    <?php
    /*if (strpos($images['nameImg'],"proj") != 0){*/
      ?>
      <div class="section">
        <div class="row container">
          <div class="col s12 m10 l8 offset-l2 offset-m1 hoverable white" id="c+c-">
            <h2 class="header flow-text center-align">Projects- It's more, it's less:</h2>
            <div class="card horizontal">
              <div class="card-image margin">
                <img src=" <?php $images['pathFile'].$images['nameImg'] ?>" alt=" <?php $images['alt'] ?>" >
                <div class="card-stacked">
                  <div class="card-content">
                    <p>The first project was to create a "that's more that's less" in python. </p>
                  </div>
                  <div class="card-action">
                    <a href="cpluscmoins.html" rel="nofollow">It's more, it's less</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php /*;}*/
  }
}?>
