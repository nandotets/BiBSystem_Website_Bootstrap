<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BibSystem - Software</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="../">BibSystem</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../software">Software</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../forum">Fórum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../account">Membro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contato">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../sobre">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Software</h1>
              <h2 class="subheading">Notas de atualização e Downloads</h2>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php
      include_once("../classes/Software.php");
      include_once("../classes/Users.php");

      $software = new Software();
      $lstSoftware = $software->listSoftwares();
      
      $Usrs = new Users();
    ?>
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h2 class="section-heading">Versões do software</h2>
            <ul>
            <?php
              foreach ($lstSoftware as $soft) {
                echo "<li><a href=\"#v".$soft->version."\">Versão ".$soft->version."</a> - <a href=\"". (($Usrs->isLogged()) ? "../bin/".$soft->filename : "../login" )."\">Download</a></li>";
              }
            ?>
            </ul>
            <h2 class="section-heading">Nota das atualizações</h2>
            <?php
              foreach ($lstSoftware as $soft) {
                echo "<h3 class=\"section-heading\" id=\"v".$soft->version."\">Versão ".$soft->version."</h3>";
                echo "<p>".$soft->patchnote."</p>";
              }
            ?>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; BibSystem 2018</p>
			  <p class="copyright text-muted"><a href="../sitemap">Mapa do site</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>

  </body>

</html>
