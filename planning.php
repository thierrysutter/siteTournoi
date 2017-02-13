<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Planning</title>

    <!-- Bootstrap core CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
	<link href="css/carousel.css" rel="stylesheet">

     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

  <body>
	<?php include_once("analyticstracking.php") ?>
    <div class="container">

      <!-- Static navbar -->
      <?php include("menu.php"); ?>

    </div> <!-- /container -->

    <?php/* $annee=2016; include("../caroussel.php"); */?>

    <div class="container">
      <?php include("groupeU11.php"); ?>
      <?php include("planningU11.php"); ?>
      <hr class="featurette-divider">
      <?php include("groupeU13.php"); ?>
      <?php include("planningU13.php"); ?>
      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Haut de page</a></p>
        <p>&copy; 2015 Association Sportive Saint-Julien-Lès-Metz &middot; <a href="#">Conditions d'utilisation</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>