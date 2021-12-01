<div class="ok">
  <div class="center-align">
    <a id="modal1-bouton" class="waves-effect waves-light btn modal-trigger center pulse" href="#modal1">Contact us</a>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet center-align">
    <div class="modal-content row">
      <div class="">
        <form class="" action="mail.php" method="post">

          <?php
          if (isset($_SESSION['user'])) {
            ?>

            <p>Bonjour <?php echo $_SESSION['pseudo']; ?> !</p>
            <input type='hidden' name='email' value="<?php echo $_SESSION['pseudo'];?>"/>

            <?php
          }else {
            ?>

            <h2>Email:</h2>
            <input type='email' name='email' class="center"/>

          <?php } ?>
          <h2>Subject:</h2>
          <input type='text' name='subject' class="center"/>

          <h2><i  id="btn" class="material-icons prefix bouton-mobile">mode_edit</i>Message:</h2>
          <input type='text' name='message' class="center"/>

          <input type='submit' value='send' />
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">back</a>
    </div>
  </div>

</div>

<div class="row blue-screen bs-pc">
  <div class="col l10 offset-l1 left-align">
      <img src="image/bluescreen.jpg" alt="Our Projects: easter egg" class="img-bs">
  </div>
</div>

<div class="row blue-screen bs-mobile" >
  <div class="col s12 m12">
      <p class="flow-text fake-mess-error left-align">Warming!Your smartphone is infected! System detected(6942) Potentially malicious viruses Rootkik.Sirefef.SPY and Torjan.Wotech! Android failed to start. Waiting for the program to respond..</p>
      <p class="flow-text fake-mess-error left-align">DO NOT TOUCH ANYTHING!</p>
      <p class="flow-text fake-mess-error left-align">  Collecting data for crash dump..</p>
  </div>
</div>
