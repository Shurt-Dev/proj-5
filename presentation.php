<?php require_once('config.php');
$sql = " SELECT * FROM user ";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $user){ ?>
   <div class="bloc_user">
     <h2><?php echo $user['pseudo']." ".$user['password'] ?></h2>
     <span class="email"><?php echo $user['email']; ?></span>
   </div>
   <div class="row" id="presentation">
     <div class="col s12 m10 l3 offset-l2 offset-m1 hoverable margin-top" >
       <div class="card" id="<?php echo $user['pseudo']; ?>">
         <div class="card-image">
           <img src="image/jevilpfp.jpg" alt="Our Projects:pdp <?php echo $user['pseudo']; ?>">
           <span class="card-title"><?php echo $user['pseudo']; ?></span>
         </div>
         <div class="card-content">
           <p class="center-align flow-text">Hello!</p>
           <p>I'm <?php echo $user['pseudo']; ?>, a student of gaming campus and this is my first year on this school. I like all types of video games but I love bullethell because this type of game requires a lot of determination and training. I'm glad to present our projects.</p>
           <p>If you want to contact me you can do so below.</p>
         </div>
         <div class="card-action">
           <p class="contact" id="adiscord">aleksi#2230</p>
           <a onclick="copyToClipboard('#adiscord')"><img class="logo hoverable circle" src="image/logo/discordlogo.png" alt="Our projects: logo discord"></a>
           <a href="https://fr.linkedin.com/in/aleksi-bielski-27a515226" rel="nofollow" target="_blank"><img class="logo hoverable circle" src="image/logo/linkedinlogo.png" alt="Our projects: logo linkdin"></a>
         </div>
       </div>
     </div>
   </div>
<?php } ?>
