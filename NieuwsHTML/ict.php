<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tech</title>

    <link rel="shortcut icon" href="../IMG/favicon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>

    <div class="top"></div>

<!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="../HTML/home.php">Bram van Rhee</a>
          </div>
          <div class="collapse navbar-collapse" id="navCollapse">
          <ul class="nav navbar-nav">
            <li><a href="../HTML/home.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nieuws <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../NieuwsHTML/ict.php">Tech</a></li>
                <li><a href="../NieuwsHTML/politiek.php">Politiek</a></li>
                <li><a href="../NieuwsHTML/sport.php">Sport</a></li>
              </ul>
            <li><a href="../HTML/form.php">Formulier</a></li>
            <li><a href="../HTML/comment.php">Reacties</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Oracle <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../OnderwerpHTML/wat.php">Wat is Oracle</a></li>
                <li><a href="../OnderwerpHTML/vader.php">Mijn vader</a></li>
                <li><a href="../OnderwerpHTML/geschiedenis.php">Geschiedenis</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-xs-6" style="padding: 0px;">
          <img src="../IMG/server.jpg" class="img-responsive">
        </div>
        <div class="col-md-6 col-xs-6" style="padding: 0px;">
          <img src="../IMG/programmeren.jpg" class="img-responsive">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-push-1">
        <ul class="pager">
          <li class="previous"><a href="sport.php"><span class="glyphicon glyphicon-chevron-left"></span>Sport</a></li>
          <li class="next"><a href="politiek.php">Politiek<span class="glyphicon glyphicon-chevron-right"></span></a></li>
        </ul>
      </div>
    </div>

    <div class="container">
      <a href="../Nieuws/ICT/foldable.php"><div class="row border top">
        <div class="col-md-8 col-sm-8">
          <h2>Samsung's Foldable Phone</h2>
          <h4><small><i>Telefoons</i></small></h4>
        </div>
        <div class="col-md-4 col-sm-4">
          <img src="../IMG/ict1.jpg" class="img-responsive">
        </div>
      </div></a>
      <a href="../Nieuws/ICT/philips.php"><div class="row border top">
        <div class="col-md-8 col-sm-8">
          <h2>Philips Hue-lampen Groeperen</h2>
          <h4><small><i>Lampen</i></small></h4>
        </div>
        <div class="col-md-4 col-sm-4">
          <img src="../IMG/ict2.jpg" class="img-responsive">
        </div>
      </div></a>
      <a href="../Nieuws/ICT/google.php"><div class="row border top">
        <div class="col-md-8 col-sm-8">
          <h2>Google Stadia: zo werkt de nieuwe gamedienst</h2>
          <h4><small><i>Gamen</i></small></h4>
        </div>
        <div class="col-md-4 col-sm-4">
          <img src="../IMG/google.jpg" class="img-responsive">
        </div>
      </div></a>
      <a href="../Nieuws/ICT/mario.php"><div class="row border top">
        <div class="col-md-8 col-sm-8">
          <h2>Mario Kart op mobiel en nieuwe Xbox</h2>
          <h4><small><i>Gamen</i></small></h4>
        </div>
        <div class="col-md-4 col-sm-4">
          <img src="../IMG/mariokart.jpg" class="img-responsive">
        </div>
      </div></a>
      <a href="../Nieuws/ICT/pokemon.php"><div class="row border top">
        <div class="col-md-8 col-sm-8">
          <h2>Adidas komt met Pokémon-sneakers</h2>
          <h4><small><i>Schoenen</i></small></h4>
        </div>
        <div class="col-md-4 col-sm-4">
          <img src="../IMG/adidas2.jpg" class="img-responsive">
        </div>
      </div></a>
    </div>

<!-- Footer -->
    <footer class="page-footer font-small">
      <div class="container text-md-left">
        <div class="row">

          <div class="col-md-4 col-lg-3 text-left">
            <h5 class="font-weight-bold text-uppercase">Algemene info</h5>
              <p>Uw bevind zich op een nieuwssite, met veel onderwerpen gerelateerd aan ICT.</p>
              <p>Er wordt 1 onderwerp behandeld, genaamd Oracle. Ondergedeeld in:</p>
              <p><a href="../OnderwerpHTML/wat.php">Wat is Oracle, </a><a href="../OnderwerpHTML/vader.php">Mijn vader, </a>en <a href="../OnderwerpHTML/geschiedenis.php">De geschiedenis</a></p>
          </div>

          <div class="hidden-mg hidden-lg">
            <hr>
          </div>

          <div class="col-md-2 col-lg-2 text-left">
            <h5 class="font-weight-bold text-uppercase">Pagina's</h5>
            <ul class="list-unstyled text-uppercase">
              <li>
                <p><a href="../HTML/home.php">Home</a></p>
              </li>
              <li>
                <p><a href="../NieuwsHTML/ict.php">Nieuws</a></p>
              </li>
              <li>
                <p><a href="../HTML/form.php">Formulier</a></p>
              </li>
              <li>
                <p><a href="../HTML/comment.php">Reacties</a></p>
              </li>
            </ul>
          </div>

          <div class="hidden-mg hidden-lg">
            <hr>
          </div>

          <div class="col-md-4 col-lg-3 text-left">
            <h5 class="font-weight-bold text-uppercase">Contact</h5>
            <ul class="list-unstyled">
              <li>
                <p>
                  <i class="fas fa-home"></i> Kennemerland 156, Nederland</p>
              </li>
              <li>
                <p>
                  <i class="fas fa-envelope"></i> <a href="mailto:support@bramvanrhee.nl">support@bramvanrhee.nl</a></p>
              </li>
              <li>
                <p>
                  <i class="fas fa-phone"></i> <a href="tel:06-23775886">06-23775886</a></p>
              </li>
            </ul>
          </div>

          <div class="hidden-mg hidden-lg">
            <hr>
          </div>

          <div class="col-md-2 col-lg-2 text-center">
            <h5 class="font-weight-bold text-uppercase">Volg ons</h5>
            <ul class="list-unstyled hidden-xs hidden-sm">
              <li><a type="button" href="https://www.facebook.com/bram.vanrhee.1?ref=bookmarks" class="btn-floating btn-fb">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a></li>
              <li><a type="button" href="https://twitter.com/bramvanrhee1?lang=nl" class="btn-floating btn-tw">
                <i class="fab fa-twitter-square fa-2x"></i>
              </a></li>
              <li><a type="button" href="https://www.linkedin.com/in/bram-van-rhee-9b186a158/?originalSubdomain=nl" class="btn-floating btn-gplus">
                <i class="fab fa-linkedin fa-2x"></i>
              </a></li>
              <li><a type="button" href="https://www.instagram.com/bramvanrhee/?hl=da" class="btn-floating btn-gplus">
                <i class="fab fa-instagram fa-2x"></i>
              </a></li>
            </ul>

            <ul class="list-unstyled list-inline visible-xs visible-sm">
              <li><a type="button" href="https://www.facebook.com/bram.vanrhee.1?ref=bookmarks" class="btn-floating btn-fb">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a></li>
              <li><a type="button" href="https://twitter.com/bramvanrhee1?lang=nl" class="btn-floating btn-tw">
                <i class="fab fa-twitter-square fa-2x"></i>
              </a></li>
              <li><a type="button" href="https://www.linkedin.com/in/bram-van-rhee-9b186a158/?originalSubdomain=nl" class="btn-floating btn-gplus">
                <i class="fab fa-linkedin fa-2x"></i>
              </a></li>
              <li><a type="button" href="https://www.instagram.com/bramvanrhee/?hl=da" class="btn-floating btn-gplus">
                <i class="fab fa-instagram fa-2x"></i>
              </a></li>
            </ul>
          </div>

        </div>
      </div>

      <div class="footer-copyright text-center">© <?php echo date("Y");?> Copyright:
        <a href="https://bramvanrhee.nl"> bramvanrhee.nl</a>
      </div>
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
