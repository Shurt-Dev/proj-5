<?php
require_once('component/config.php');
$sql = "SELECT * FROM user";
$pre = $pdo->prepare($sql);
$pre->execute();
$user = $pre->fetchAll(PDO::FETCH_ASSOC);//current prend la première ligne du tableau
foreach ($user as $users) {?>
  <hr>
  <div class="row white">
    <form class="" action="process/lste_user.php" method="post">
      <input type="hidden" name="id" value="<?php echo $users['id']; ?>">
      <div class="col s2 m2 l2 offset-s1 offset-m1 offset-l1">
        <input type="text" name="pseudo">
        <label for="pseudo">  <?php echo $users['pseudo'];?></label>
      </div>
      <div class="col s2 m2 l2">
        <input type="text" name="email">
        <label for="email">  <?php echo $users['email'];?></label>
      </div>

      <div class="col s2 m2 l2">
        <input type="text" name="password">
        <label for="password">  <?php echo $users['password'];?></label>
      </div>

      <div class="col s2 m2 l2">
        <input type="text" name="date">
        <label for="date">  <?php echo $users['date'];?></label>
      </div>

      <div class="col s2 m2 l2">
        <input type="text" name="isAdmin">
        <label for="isAdmin"><?php echo $users['isAdmin'];?></label>
      </div>

      <div class="col s2 m2 l2 offset-s5 offset-m5 offset-l5">
        <button type="update" name="update">Update</button>
      </div>
    </form>
  </div>
<?php
}?>
