<html lang="en" dir="ltr">
  <?php require_once('head.php') ?>
  <body class="center">
    <div class="ok">
      <?php require_once('navbar.php') ?>
      <div class="row">
        <?php require_once('carousel.php') ?>
        <!-- <div class="col s12 m8 offset-m2 l8 offset-l2 hoverable red darken-3">
          <div class="card">
            <p class="texte-carousel1">This is the game at the start of each session. The point represent an empty emplacement and the vertical bar is here to help visualize column. Each column is numerated from 1 to 7.</p>
            <p class="texte-carousel2">An example mid-game, where the program ask the player 2 where he want to put his token(chip).</p>
            <p class="texte-carousel3">And the announcement of the winner + a proposition to play again.</p>
            <p class="texte-carousel4">Another example mid game.</p>
            <hr>
            <h2>Description</h2>
            <hr>
            <p>We made this game of Connect 4 as our second project in python. The image are from Alexander's game, but the visuals rendering are pretty similar to Aleksi's game. The goal is simple, align four token of your color verticaly, horizontally, or diagonally. To chose in which column you want your token to be, you just have to enter the correspondant number when you're prompt to. The winner is announced automatically by the program, and it can be Player 1, Player 2 or the computer(in case of a draw). Some colors were added to simplify gameplay and making the game more enjoyable</p>
          </div>
        </div> -->
      </div>
      <div class="center-align">
        <a id="modal1-bouton" class="waves-effect waves-light btn modal-trigger center pulse" href="#modal1">Contact us</a>
      </div>
      <!-- Modal Structure -->
      <div id="modal1" class="modal bottom-sheet center-align">
        <div class="modal-content">
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
                <div class="col s12 m12 l10 offset-l1">
                  <p>This is an inline input field:</p>
                  <div class="input-field inline">
                    <input id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                  </div>
                </div>
                <div class="input-field col s12 m12 l10 offset-l1">
                  <i  id="btn" class="material-icons prefix bouton-mobile">mode_edit</i>
                  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                  <label for="icon_prefix2">message</label>
                </div>
              </div>
            </form>
          </div>
          <div class="center-align">
            <a class="waves-effect waves-light btn modal-trigger center" href="#modal2">send</a>
          </div>
          <!-- Modal Structure -->
          <div id="modal2" class="modal bottom-sheet center-align">
            <div class="modal-content">
              <h4>We are sorry</h4>
              <p>We can't send your message for the moment please try an other moment</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Okay</a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">back</a>
        </div>
      </div>
    </div>
    <div class="row blue-screen bs-pc">
      <div class="col l10 offset-l1 left-align">
          <img src="image/bluescreen.jpg" alt="Our projects: esater egg" class="img-bs">
      </div>
    </div>
    <div class="row blue-screen bs-mobile" >
      <div class="col s12 m12">
          <p class="flow-text fake-mess-error left-align">Warming!Your smartphone is infected! System detected(6942) Potentially malicious viruses Rootkik.Sirefef.SPY and Torjan.Wotech! Android failed to start. Waiting for the program to respond..</p>
          <p class="flow-text fake-mess-error left-align">DO NOT TOUCH ANYTHING!</p>
          <p class="flow-text fake-mess-error left-align">  Collecting data for crash dump..</p>
      </div>
    </div>
    <script src="js/jquery.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
