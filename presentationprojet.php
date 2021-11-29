<?php require_once('config.php');

$sql = "
    SELECT nameImg, pathFile, alt, COUNT(*)
    FROM images
    WHERE pathFile LIKE '%index%'
    GROUP BY pathFile
    HAVING pathFile LIKE '$parallax$'
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $images){ ?>
  <?php
    if $data['COUNT(*)']
      if (strpos($images['pathFile'],"parallax") != false) { ?>
        <div class="parallax-container">
          <div class="parallax"><img src="
          <?php
          echo $images['pathFile'].$images['nameImg'];
          ?>" alt="<?php echo $images['alt'] ?>">
          </div>
        </div>
      <?php } ?>
        <div class="section">
          <div class="row container">
            <div class="col s12 m10 l8 offset-l2 offset-m1 hoverable white" id="c+c-">
              <h2 class="header flow-text center-align">Projects- It's more, it's less:</h2>
              <div class="card horizontal">
                <div class="card-image margin">
                  <img src="
                  <?php
                  if (strpos($images['pathFile'],"presprojet") != false)
                  {
                    echo $images['pathFile'].$images['nameImg'];
                  }
                  ?>" alt="<?php echo $images['alt'];?>">
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
      <?php }
    } $data['COUNT(*)'] = $data['COUNT(*)']-1;
  }  ?>
