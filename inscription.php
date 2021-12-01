<html>
  <?php require_once('component/config.php') ?>
  <?php require_once('component/head.php') ?>
  <body>
    <?php require_once('component/navbar.php'); ?>
    <div class="row">
      <div class="col s10 m8 l6 offset-s1 offset-m2 offset-l3 center row">
        <h1>Our-projects:signup</h1>
        <div class="white col s6 m6 l6 offset-s3 offset-m3 offset-l3">
          <form method="post">
            <h2>Pseudo:</h2>
            <input type='pseudo' name='pseudo'/>
            <h2>Email:</h2>
            <input type='email' name='email' />
            <h2>Password:</h2>
            <input type='password' name='password' />
            <input type='submit' value='Me connecter' />
          </form>
          <?php
          if (isset($_POST['email']) and $_POST['email'] !="" and $_POST['email'] !="" and $_POST['email'] !="") {
            $sql_verif = "SELECT * FROM user WHERE pseudo = '".$_POST['pseudo']."' or email = '".$_POST['email']."'" ;
            $pre_verif = $pdo->prepare($sql_verif);
            $pre_verif->execute();
            $data = $pre_verif->fetchAll(PDO::FETCH_ASSOC);
            if (empty($data)) {
            $sql = "INSERT INTO user (pseudo,email,password) VALUES(:pseudo,:email,sha1(:password))";
            $dataBinded = array(':pseudo' => $_POST['pseudo'],':email'=> $_POST['email'],':password'=> $_POST['password']);
            $pre = $pdo->prepare($sql);
            $pre->execute($dataBinded);
            header('Location:login.php');
          }else {
            ?>
              <script type="text/javascript">
                alert('Pseudo ou email déjà utilsé !');
              </script>
            <?php
            }
          }
          ?>
        </div>



      </div>
    </div>
  </body>
</html>
