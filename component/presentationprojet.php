<?php require_once('config.php');

$sql = "SELECT * FROM indexProjet ORDER BY id;";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $indexProj){?>
    <div class="parallax-container">
      <div class="parallax">
        <img src="<?php echo "image/".$indexProj['parallax']; ?>" alt=" <?php echo $indexProj['altPar']; ?>">
      </div>
    </div>
    <div class="section">
      <div class="row container">
        <div class="col s12 m10 l8 offset-l2 offset-m1 hoverable white" id="c+c-">
          <h2 class="header flow-text center-align">Projects - <?php echo $indexProj['projName']; ?>:</h2>
          <div class="card horizontal">
            <div class="card-image margin">
              <img src=" <?php echo "image/".$indexProj['img']; ?>" alt=" <?php echo $indexProj['alt']; ?>" >
              <div class="card-stacked">
                <div class="card-content">
                  <p><?php echo $indexProj['presentation']; ?> </p>
                </div>
                <div class="card-action">
                  <a href="projet.php?projet=<?php echo $indexProj['id']; ?>" rel="nofollow"><?php echo $indexProj['projName']; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
