<?php require_once('config.php');

$sql = "
    SELECT pseudo, email, password
    FROM user
  ";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC); ?>
<div class="row" id="presentation">
  <?php foreach($data as $user){ ?>
    <div class="col s12 m10 l3 offset-l2 offset-m1 hoverable margin-top" >
      <div class="card" id="<?php echo $user['pseudo']; ?>">
        <div class="card-image">
          <img src="image/jevilpfp.jpg" alt="Our Projects:pdp <?php echo $user['pseudo']; ?>">
          <span class="card-title"><?php echo $user['pseudo']; ?></span>
        </div>
        <div class="card-content">
          <p class="center-align flow-text">Hello!</p>
          <p>I'm <?php echo $user['pseudo']; ?>,</p>
        </div>
        <div class="card-action">
          <p class="contact" id="adiscord">aleksi#2230</p>
          <a onclick="copyToClipboard('#adiscord')"><img class="logo hoverable circle" src="image/logo/discordlogo.png" alt="Our projects: logo discord"></a>
          <a href="https://fr.linkedin.com/in/aleksi-bielski-27a515226" rel="nofollow" target="_blank"><img class="logo hoverable circle" src="image/logo/linkedinlogo.png" alt="Our projects: logo linkdin"></a>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
