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

    <meta charset="utf-8">
    <title>Our projects-website</title>
  </head>
  <body class="center">
    <div class="ok">


      <div class="navbar-fixed navbar-fixed-zindex">

        <ul id="dropdown-presentation" class="dropdown-content">
          <li><a href="index.html#Aleksi">Aleksi</a></li>
          <li class="divider"></li>
          <li><a href="index.html#Shurturgal">Alexandre</a></li>
        </ul>

        <ul id="dropdown-Projets" class="dropdown-content">
          <li><a href="cpluscmoins.html">It's more, it's less</a></li>
          <li class="divider"></li>
          <li><a href="puissance4.html">Connect4</a></li>
          <li class="divider"></li>
          <li><a href="#">Website</a></li>
        </ul>

        <ul id="dropdown-Projets-tel" class="dropdown-content">
          <li><a href="cpluscmoins.html">It's more, it's less</a></li>
          <li class="divider"></li>
          <li><a href="puissance4.html">Connect4</a></li>
          <li class="divider"></li>
          <li><a href="#">Website</a></li>
        </ul>

        <nav >
          <div class="nav-wrapper">
            <a href="index.html" class="brand-logo center flow-texte">Our projects-Website!</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li class="divider-horizontal">.</li>
              <li><a href="index.html#presentation">Presentation</a></li>
              <li class="divider-horizontal">.</li>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown-Projets">Projects<i class="material-icons right">arrow_drop_down</i></a></li>
              <li class="divider-horizontal">.</li>
              <li><a href="#modal1-bouton">Contact us</a></li>
            </ul>
          </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown-Projets-tel">Projets<i class="material-icons right">arrow_drop_down</i></a></li>
          <li class="divider"></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown-presentation">Presentation<i class="material-icons right">arrow_drop_down</i></a></li>
          <li class="divider"></li>
          <li><a href="#modal1-bouton">Contact us</a></li>
        </ul>
      </div>
      <h1 class="flow-texte center-align color-white">Website</h1>
      <div class="row">
        <div class="col s12 m8 l6 offset-m2 offset-l3">

          <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="image/img-website/page-website-R6.JPG" alt="Our projects: website first picture"></a>
            <a class="carousel-item" href="#two!"><img src="image/img-website/page-website-minecraft.JPG" alt="Our projects: website seconde picture"></a>
            <a class="carousel-item" href="#three!"><img src="image/img-website/img-html.JPG" alt="Our projects: website third picture"></a>

          </div>
        </div>


      </div>
      <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3 hoverable grey lighten-3 description">
          <div class="texte-carousel1">This website was created by Aleksi and his group for the their projects; he decided with his group make a website on Rainbow Six Siege.</div>
          <div class="texte-carousel2">This website was created by Shurturgal and his group for the their projects; he decided with his group make a website on Minecraft.</div>
          <div class="texte-carousel3">This is a part of our code in HTML.</div>
          <hr>
          <h2 class="flow-texte">Description:</h2>
          <hr>
          <p>For our third project we had to make a website about a video game. The final goal of this exercise was to understand and master the HTML and CSS languages but also the principle of SEO (which allows a better referencing according to many criteria).</p>
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
          <img src="image/bluescreen.jpg" alt="Our projects: easter egg" class="img-bs">
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
