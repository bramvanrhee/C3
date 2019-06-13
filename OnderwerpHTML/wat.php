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
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Oracle <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="wat.php">Wat is Oracle</a></li>
                <li><a href="vader.php">Mijn vader</a></li>
                <li><a href="geschiedenis.php">Geschiedenis</a></li>
              </ul>
            </li>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-8 center col-md-push-2 text-center">
          <a href="https://oracle.com"><img src="../IMG/oracle.png" class="img-responsive"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h1>Oracle Corporation</h1>

          <h3><b><a href="#wat" data-toggle="collapse">Wat is oracle Corporation?</a></b></h3>

          <div id="wat" class="collapse"><h4 class="space">Oracle Corporation is een Amerikaans softwarebedrijf genoteerd aan de New York Stock Exchange. Het bedrijf heeft wereldwijd meer dan 130.000 werknemers. Oprichter Larry Ellison is voorzitter van het bedrijf. Het hoofdkantoor is in Redwood City (Californië).</h4></div>

          <h3><b><a href="#activiteiten" data-toggle="collapse">Activiteiten</a></b></h3>

          <div id="activiteiten" class="collapse"><h4 class="space">Oracle Corporation is vooral bekend vanwege zijn databasesysteem Oracle. Tegenwoordig begeeft het zich, zeker na de overname van BEA Systems, ook steeds meer op de middleware markt. Naast databases is Oracle Corporation ook een van de grootste leveranciers van bedrijfssoftware verzameld onder de naam Oracle E-Business Suite (ERP-/CRM-pakket). De belangrijkste productgroepen van Oracle Corporation zijn:<br><br>
            <ul>
              <li>Databases, o.a. Oracle 11g, Berkeley DB, InnoDB, Java DB, MySQL, Oracle Rdb, TimesTen.</li>
              <li>Developer Tools</li>
              <li>Oracle Fusion Middleware</li>
              <li>E-Business Suite (ERP/CRM pakket)</li>
            </ul>
          </h4></div>

          <h3><b><a href="#open" data-toggle="collapse">Open Source</a></b></h3>

          <div id="open" class="collapse"><h4 class="space">
            <ul>
              <li>Linux in het bedrijf - Oracle Database is nummer 1 als het om Linux gaat, met een marktaandeel van 82,6%, en Oracle Unbreakable Linux biedt kwaliteitsondersteuning voor Linux.</li>
              <li>Eclipse - Oracle is lid van de raad van bestuur en strategisch ontwikkelaar van Eclipse, en heeft Oracle TopLink gegeven aan de open-sourcegemeenschap. Daarnaast levert Oracle ontwikkelaars en managers voor drie projecten van Eclipse: Dali JPA Tools, JavaServer Faces (JSF) en BPEL.</li>
              <li>Vereenvoudiging van de ontwikkeling van PHP.</li>
              <li>Open source - toolingprojecten - Oracle levert een bijdrage aan diverse toolingprojecten, zoals Project Trinidad (ADF Faces), Eclipse, Spring en SASH.</li>
              <li>ntegratie in Berkeley DB - Berkeley DB van Oracle is de meest algemeen gebruikte open-sourcedatabase ter wereld; het aantal implementaties wordt geschat op meer dan 200 miljoen.</li>
              <li>InnoDB, ontwikkeld door Innobase Oy, een dochteronderneming van Oracle, en een transactional storage engine voor de populaire database MySQL.</li>
            </ul>
          </h4></div>
        </div>
        <div class="col-md-6">
          <h1>Oracle Database</h1>

          <h3><b><a href="#database" data-toggle="collapse">Wat is Oracle Database</a></b></h3>

          <div id="database" class="collapse"><h4 class="space">Oracle Database is een databasemanagementsysteem (RDBMS) en vlaggenschip van Oracle. Oracle RDBMS was de eerste database gebaseerd op het System/R-model van IBM en de eerste relationele database die gebruikmaakt van SQL. Er is ondersteuning voor een groot aantal besturingssystemen.</h4>

          <h4 class="space">Oracle heeft in de loop der tijd een 'eigen' ERP-lijn opgebouwd welke bekend is onder de naam Oracle E-Business Suite. Met deze standaardsoftware kunnen de ondersteunende processen in organisaties worden beheerd.</h4></div>
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
