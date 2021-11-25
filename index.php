<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta  charset="utf-8"/>
    <title>Our projects</title>
    <meta name="description"  content="The part of the code that asks the player for difficulty">
  </head>
  <body class="center ">

    <div class="ok">
      <?php
        require_once('navbar.php');
        require_once('presentation.php');
      ?>

      <div class="row">
        <div class="col s10 m6 l4 offset-s1 offset-m3 offset-l4 lime lighten-5">
          <h1 class="center-align flow-text ">Because it's our Projects!</h1>
        </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="image/plus_moins.jpg" alt="Our Projects: images plus-moins parallax"></div>
      </div>
      <div class="section">
        <div class="row caontainer">
          <div class="col s12 m10 l8 offset-l2 offset-m1 hoverable white" id="c+c-">
            <h2 class="header flow-text center-align">Projects- It's more, it's less:</h2>
            <div class="card horizontal">
              <div class="card-image margin">
                <img src="image/cpluscmoins.jpg" alt="Our Projects: images plus-moins">
                <div class="card-stacked">
                  <div class="card-content">
                    <p>The first project is to create a "that's more that's less" in python. </p>
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
      <div class="parallax-container">
        <div class="parallax"><img src="image/puis4featmichelange.jpg" alt="Our Projects: images content4 parallax"></div>
      </div>
      <div class="section">
        <div class="row caontainer">
          <div class="col s12 m10 l10 offset-l1 offset-m1 hoverable white" id="puissance4">
              <h2 class="header flow-text center-align">Projects-Connect 4:</h2>
              <div class="card horizontal">
                <div class="card-image margin">
                  <img src="image/img-puis4/puissance4.jpg" alt="Our Projects: images content4 ">
                  <div class="card-stacked">
                    <div class="card-content">
                      <p>Our second project was to do a Connect 4 game in C language under a debian environment.</p>
                    </div>
                    <div class="card-action">
                      <a href="puissance4.html" rel="nofollow">Connect 4</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="image/img-website/img-html.JPG" alt="Our Projects: images website parallax"></div>
      </div>
      <div class="section">
        <div class="row caontainer">
          <div class="row col s12 m10 l8 offset-l2 offset-m1 hoverable white" id="monsite">
            <h2 class="header flow-text center-align">Projects- Our website</h2>
            <div class="card horizontal">
              <div class="card-image margin">
                <img src="image/website.jpg" alt="Our Projects: images website">
                <div class="card-stacked">
                  <div class="card-content">
                    <p>Our third project was to be make a website on our favorite video games.</p>
                  </div>
                  <div class="card-action">
                    <a href="monsite.html" rel="nofollow">Website</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
              <h3>We are sorry,error sending "our projects". </h3>
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






    <script src="js/jquery.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
