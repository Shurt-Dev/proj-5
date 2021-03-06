<?php require_once('component/config.php') ?>
<div class="navbar-fixed navbar-fixed-zindex">
  <ul id="dropdown-presentation" class="dropdown-content">
    <li><a href="index.php#Aleksi" rel="nofollow">Aleksi</a></li>
    <li class="divider"></li>
    <li><a href="index.php#Shurturgal">Alexandre</a></li>
  </ul>

  <ul id="dropdown-Projets" class="dropdown-content">
    <li><a href="c+c-.php" rel="nofollow">It's more, it's less</a></li>
    <li class="divider"></li>
    <li><a href="puissance4.php" rel="nofollow">Connect4</a></li>
    <li class="divider"></li>
    <li><a href="#monsite" rel="nofollow">Website</a></li>
  </ul>

  <ul id="dropdown-Projets-tel" class="dropdown-content">
    <li><a href="#c+c-" rel="nofollow">It's more, it's less</a></li>
    <li class="divider"></li>
    <li><a href="#puissance4" rel="nofollow">Connect4</a></li>
    <li class="divider"></li>
    <li><a href="#monsite" rel="nofollow">Website</a></li>
  </ul>

  <nav >
    <div class="nav-wrapper">
      <a href="index.php" rel="nofollow" class="brand-logo center">Our projects</a>
      <a href="#" rel="nofollow" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="divider-horizontal">.</li>
        <li><a href="#presentation" rel="nofollow">Presentation</a></li>
        <li class="divider-horizontal">.</li>
        <li><a class="dropdown-trigger" href="#!" rel="nofollow" data-target="dropdown-Projets">Projets<i class="material-icons right">arrow_drop_down</i></a></li>
        <li class="divider-horizontal">.</li>
        <li><a href="#modal1-bouton" rel="nofollow">Contact us</a></li>
        <li class="divider-horizontal">.</li>
        <?php
          if (isset($_SESSION['user'])) {
        ?>
        <li><a href="settings.php" rel="nofollow"><?php echo $_SESSION['pseudo']; ?></a></li>
        <?php
          }else {
        ?>
        <li><a href="login.php" rel="nofollow">Login</a></li>
        <?php
          }
        ?>
      </ul>

    </div>

  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a class="dropdown-trigger" href="#!" rel="nofollow" data-target="dropdown-Projets-tel">Projets<i class="material-icons right">arrow_drop_down</i></a></li>
    <li class="divider"></li>
    <li><a class="dropdown-trigger" href="#!" rel="nofollow" data-target="dropdown-presentation">Presentation<i class="material-icons right">arrow_drop_down</i></a></li>
    <li class="divider"></li>
    <li><a href="#modal1-bouton" rel="nofollow">Contact us</a></li>
    <li class="divider"></li>
    <?php
    if (isset($_SESSION['user'])) {
    ?>
    <li><a href="settings.php" rel="nofollow"><?php echo $_SESSION['pseudo']; ?></a></li>
    <?php
    }else {
    ?>
    <li><a href="login.php" rel="nofollow">Login</a></li>
    <?php
      }
    ?>


  </ul>
</div>
