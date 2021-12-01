<html>
  <?php require_once('component/config.php') ?>
  <?php require_once('component/head.php') ?>
  <body>
    <?php require_once('component/navbar.php'); ?>

    <div class="row">
      <div class="col s10 m8 l6 offset-s1 offset-m2 offset-l3 center row">
        <h1>Settings:</h1>
        <div class="white col s10 m10 l10 offset-s1 offset-m1 offset-l1">
          <form method="post" action="settings.php">
            <h2>New Pseudo:</h2>
            <input type='pseudo' name='pseudo' class="center"/>

            <h2>New email:</h2>
            <input type='email' name='email' class="center"/>

            <h2>New Password:</h2>
            <input type='password' name='password' class="center"/>

            <button type="update" name="update">Update</button>
          </form>
        </div>
        <div class="white col s10 m10 l10 offset-s1 offset-m1 offset-l1">
          <a href="process/disconect.php">Disconect</a>
        </div>
        <?php
        if (isset($_POST['email'])) {
          $sql_verif = "SELECT * FROM user WHERE pseudo = '".$_POST['pseudo']."' or email = '".$_POST['email']."'" ;
          $pre_verif = $pdo->prepare($sql_verif);
          $pre_verif->execute();
          $data = $pre_verif->fetchAll(PDO::FETCH_ASSOC);
          if (empty($data)) {
            if (!empty($_POST['pseudo'])){
              $sql = "UPDATE user SET pseudo = '".$_POST['pseudo']."' WHERE email ='".$_SESSION['email']."' AND id= '".$_SESSION['id']."'";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $_SESSION['pseudo'] = $_POST['pseudo'];
            }
            if (!empty($_POST['email'])){
              $sql = "UPDATE user SET email = '".$_POST['email']."' WHERE email ='".$_SESSION['email']."' AND id= '".$_SESSION['id']."'";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $_SESSION['email'] = $_POST['email'];
            }
            if (!empty($_POST['password'])){
              $sql = "UPDATE user SET password = '".sha1($_POST['password'])."' WHERE email ='".$_SESSION['email']."' AND id= '".$_SESSION['id']."'";
              $pre = $pdo->prepare($sql);
              $pre->execute();

            }
            header('Location:../index.php');
        }else {
          ?>
            <script type="text/javascript">
              alert('Pseudo ou email déjà utilsé !');
            </script>
          <?php
          }
        }?>
      </div>

    </div>
    <?php
    if($_SESSION['isAdmin'] ==1){ //vérifie si le resultat est vide !
      require_once ('liste_utilisateur.php');
    }
    ?>
  </body>
</html>
