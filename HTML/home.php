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
            <a class="navbar-brand" href="home.php">Bram van Rhee</a>
          </div>
          <div class="collapse navbar-collapse" id="navCollapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nieuws <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../NieuwsHTML/ict.php">Tech</a></li>
                <li><a href="../NieuwsHTML/politiek.php">Politiek</a></li>
                <li><a href="../NieuwsHTML/sport.php">Sport</a></li>
              </ul>
            <li><a href="form.php">Formulier</a></li>
            <li><a href="comment.php">Reacties</a></li>
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

<!-- Slideshow -->
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
  <li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

<div class="carousel-inner">
  <div class="item active">
    <a href="../NieuwsHTML/ict.php"><img src="../IMG/ict.jpg" style="width:100%;"></a>
  </div>

  <div class="item">
  <a href="../NieuwsHTML/politiek.php"><img src="../IMG/politiek.jpg" style="width:100%;"></a>
  </div>

  <div class="item">
    <a href="../NieuwsHTML/sport.php"><img src="../IMG/sport.png" style="width:100%;"></a>
  </div>

  <div class="item">
    <a href="../OnderwerpHTML/wat.php"><img src="../IMG/oracle.png" style="width:100%;"></a>
  </div>
</div>

<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>

<!-- Latest News -->
    <div class="container">

      <div class="row">
        <div class="col-md centered">
          <div class="col2">
             <iframe src="https://www.pietsweer.nl/utils/weather-widget/" width="100%" height="100%"></iframe>
          </div>
        </div>
      </div>

<!-- MD LG -->
      <div class="row">
        <div class="col-md-4 visible-md visible-lg">
          <div class="img"><a href="nieuws.php"><img src="../IMG/test1.jpg" class="img-responsive"></a></div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="img"><a href="nieuws.php"><img src="../IMG/test.jpg" class="img-responsive"></a></div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="img"><a href="nieuws.php"><img src="../IMG/test1.jpg" class="img-responsive"></a></div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-4 visible-md visible-lg">
          <div class="col1">Main</div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="col1">Main</div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="col1">Main</div>
        </div>
      </div>

<!-- XS SM -->
      <div class="row">
        <div class="col-xs-12 visible-xs visible-sm">
          <div class="img"><img src="../IMG/test1.jpg" class="img-responsive"></div>
        </div>
        <div class="col-xs-12 visible-xs visible-sm">
          <div class="col1">Main</div>
        </div>

        <div class="col-xs-12 visible-xs visible-sm">
          <div class="img"><img src="../IMG/test1.jpg" class="img-responsive"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 visible-xs visible-sm">
          <div class="col1">Main</div>
        </div>
        <div class="col-xs-12 visible-xs visible-sm">
          <div class="img"><img src="../IMG/test.jpg" class="img-responsive"></div>
        </div>
        <div class="col-xs-12 visible-xs visible-sm">
          <div class="col1">Main</div>
        </div>
      </div>

<!-- MD LG -->
      <div class="row">
        <div class="col-md-4 visible-md visible-lg">
          <div class="img"><img src="../IMG/test1.jpg" class="img-responsive"></div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="img"><img src="../IMG/test.jpg" class="img-responsive"></div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="img"><img src="../IMG/test1.jpg" class="img-responsive"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 visible-md visible-lg">
          <div class="col1"></div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="col1"></div>
        </div>
        <div class="col-md-4 visible-md visible-lg">
          <div class="col1"></div>
        </div>
      </div>
    </div>

<!-- XS SM -->
    <div class="row">
      <div class="col-xs-12 visible-xs visible-sm">
        <div class="img"><img src="../IMG/test1.jpg" class="img-responsive"></div>
      </div>
      <div class="col-xs-12 visible-xs visible-sm">
        <div class="col1">Main</div>
      </div>
      <div class="col-xs-12 visible-xs visible-sm">
        <div class="img"><img src="../IMG/test1.jpg" class="img-responsive"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 visible-xs visible-sm">
        <div class="col1">Main</div>
      </div>
      <div class="col-xs-12 visible-xs visible-sm">
        <div class="img"><img src="../IMG/test.jpg" class="img-responsive"></div>
      </div>
      <div class="col-xs-12 visible-xs visible-sm">
        <div class="col1">Main</div>
      </div>
    </div>
  </div>

<!-- Categories -->
    <div class="container">
      <div class="list-group">
        <a href="nieuws.html" class="list-group-item well well-sm">Nieuws</h4><span class="badge">12</span></a>
        <a href="form.html" class="list-group-item well well-sm">Comments <span class="badge">5</span></a>
        <a href="#" class="list-group-item well well-sm">Warnings <span class="badge">3</span></a>
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
