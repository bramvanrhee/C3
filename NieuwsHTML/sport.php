<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tijdelijk</title>

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
          <img src="../IMG/mannen.jpg" class="img-responsive">
        </div>
        <div class="col-md-6 col-xs-6" style="padding: 0px;">
          <img src="../IMG/vrouwen.jpg" class="img-responsive">
        </div>
      </div>
    </div>

    <div class="container">
      <a href="../Nieuws/Sport/oranjestoet.php"><div class="row border top">
        <div class="col-md-8">
          <h2>Fransen roemen Oranjestoet: 'Dit heb ik nog nooit gezien'</h2>
          <h4><small><i>Voetbal</i></small></h4>
        </div>
        <div class="col-md-4">
          <img src="../IMG/oranjestoet.jpg" class="img-responsive">
        </div>
      </div>
      <a href="../Nieuws/Sport/froome.php"><div class="row border top">
        <div class="col-md-8">
          <h2>Chris Froome mist Tour na zware val</h2>
          <h4><small><i>Wielrennen</i></small></h4>
        </div>
        <div class="col-md-4">
          <img src="../IMG/froome.jpeg" class="img-responsive">
        </div>
      </div>
      <a href="../Nieuws/Sport/sjinkie.php"><div class="row border top">
        <div class="col-md-8">
          <h2>Terug op het ijs: Sjinkie schaatst weer ondanks brandwonden</h2>
          <h4><small><i>Schaatsen</i></small></h4>
        </div>
        <div class="col-md-4">
          <img src="../IMG/sjinkie.jpg" class="img-responsive">
        </div>
      </div>
      <a href="../Nieuws/Sport/thailand.php"><div class="row border top">
        <div class="col-md-8">
          <h2>Recordzege op WK: Amerikaanse ploeg verslaat Thailand met 13-0</h2>
          <h4><small><i>Voetbal</i></small></h4>
        </div>
        <div class="col-md-4">
          <img src="../IMG/thailand.jpg" class="img-responsive">
        </div>
      </div>
      <a href="../Nieuws/Sport/verstappen.php"><div class="row border top">
        <div class="col-md-8">
          <h2>Verstappen houdt vertrouwen in Red Bull: 'Ik geloof in dit project'</h2>
          <h4><small><i>Formule 1</i></small></h4>
        </div>
        <div class="col-md-4">
          <img src="../IMG/verstappen.jpg" class="img-responsive">
        </div>
      </div>
    </div>

<!-- Footer -->
    <footer class="page-footer font-small">
      <div class="container text-md-left">
        <div class="row">

          <div class="col-md-4 col-lg-3 text-left">
            <h5 class="font-weight-bold text-uppercase">Algemene info</h5>
              <p>Uw bevind zich op een nieuwssite, met veel onderwerpen gerelateerd aan ICT.</p>
              <p>Er wordt 1 onderwerp behandeld, genaamd Oracle. Ondergedeeld in:</p>
              <p><a href="wat.php">Wat is Oracle, </a><a href="vader.php">Mijn vader, </a>en <a href="geschiedenis.php">De geschiedenis</a></p>
          </div>

          <div class="hidden-mg hidden-lg">
            <hr>
          </div>

          <div class="col-md-2 col-lg-2 text-left">
            <h5 class="font-weight-bold text-uppercase">Pagina's</h5>
            <ul class="list-unstyled text-uppercase">
              <li>
                <p><a href="home.php">Home</a></p>
              </li>
              <li>
                <p><a href="nieuws.php">Nieuws</a></p>
              </li>
              <li>
                <p><a href="form.php">Formulier</a></p>
              </li>
              <li>
                <p><a href="comment.php">Reacties</a></p>
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
                  <i class="fas fa-envelope"></i> support@bramvanrhee.nl</p>
              </li>
              <li>
                <p>
                  <i class="fas fa-phone"></i> 06-23775886</p>
              </li>
            </ul>
          </div>

          <div class="hidden-mg hidden-lg">
            <hr>
          </div>

          <div class="col-md-2 col-lg-2 text-center">
            <h5 class="font-weight-bold text-uppercase">Volg ons</h5>
            <ul class="list-unstyled hidden-xs hidden-sm">
              <li><a type="button" class="btn-floating btn-fb">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a></li>
              <li><a type="button" class="btn-floating btn-tw">
                <i class="fab fa-twitter-square fa-2x"></i>
              </a></li>
              <li><a type="button" class="btn-floating btn-gplus">
                <i class="fab fa-linkedin fa-2x"></i>
              </a></li>
              <li><a type="button" class="btn-floating btn-gplus">
                <i class="fab fa-instagram fa-2x"></i>
              </a></li>
            </ul>

            <ul class="list-unstyled list-inline visible-xs visible-sm"
              <li><a type="button" class="btn-floating btn-fb">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a></li>
              <li><a type="button" class="btn-floating btn-tw">
                <i class="fab fa-twitter-square fa-2x"></i>
              </a></li>
              <li><a type="button" class="btn-floating btn-gplus">
                <i class="fab fa-linkedin fa-2x"></i>
              </a></li>
              <li><a type="button" class="btn-floating btn-gplus">
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
