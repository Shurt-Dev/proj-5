<html>
  <?php require_once('component/config.php') ?>
  <?php require_once('component/head.php') ?>
  <body>
    <?php require_once('component/navbar.php'); ?>

    <div class="row">
      <div class="col s10 m8 l6 offset-s1 offset-m2 offset-l3 center row">
        <h1>Connexion</h1>
        <div class="white col s10 m10 l10 offset-s1 offset-m1 offset-l1">
          <form method="post" action="login.php">
            <h2>Email:</h2>
            <input type='email' name='email' class="center"/>
            <h2>Password:</h2>
            <input type='password' name='password' class="center"/>
            <input type='submit' value='Me connecter' />
          </form>
          <a href="inscription.php" rel="nofollow">signup</a>
          <?php
          if (isset($_POST['email'])){
            $sql = "SELECT id,pseudo,email FROM user WHERE email ='".$_POST['email']."' AND password='".sha1($_POST['password'])."'";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
            if(empty($user)){ //vérifie si le resultat est vide !
            ?>
           <script type="text/javascript">
             alert('Utilisateur ou mot de passe incorrect !');
           </script>
            <?php
            }
            else{
              $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
              $_SESSION['id'] = $user['id'];
              $_SESSION['email'] = $user['email'];
              $_SESSION['pseudo'] = $user['pseudo'];

              $sql_admin = "SELECT isAdmin FROM user WHERE email='".$_SESSION['email']."'";
              $pre_admin = $pdo->prepare($sql_admin);
              $pre_admin->execute();
              $user_admin = current($pre_admin->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
              $_SESSION['isAdmin']=$user_admin['isAdmin'];



              header('Location:index.php');
            }
          }
          ?>
        </div>



      </div>
    </div>
  </body>
</html>
