<?php require_once('config.php');

$sql = "
    SELECT *
    FROM images
    WHERE parallax IS NOT NULL
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $images){?>
    <div class="parallax-container">
      <div class="parallax">
        <img src="<?php echo $images['pathFilePar'].$images['parallax']; ?>" alt=" <?php echo $images['altPar']; ?>">
      </div>
    </div>
    <div class="section">
      <div class="row container">
        <div class="col s12 m10 l8 offset-l2 offset-m1 hoverable white" id="c+c-">
          <h2 class="header flow-text center-align">Projects- It's more, it's less:</h2>
          <div class="card horizontal">
            <div class="card-image margin">
              <img src=" <?php echo $images['pathFile'].$images['img']; ?>" alt=" <?php echo $images['alt']; ?>" >
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
}?>
