<?php ob_start("ob_gzhandler"); $annee=2015;?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Page d'accueil</title>
    
    <!-- Bootstrap core CSS -->
     <link href="/tournoi/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
	<link href="/tournoi/css/carousel.css" rel="stylesheet">
    
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
	<?php include_once("../analyticstracking.php") ?>
    <div class="container">

      <!-- Static navbar -->
      <?php include("../menu.php"); ?>

    </div> <!-- /container -->
    
    <?php include("../caroussel.php"); ?>
    
    <div class="container marketing">
    	<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-2">
          <!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">-->
          <img class="img-circle" src="/tournoi/images/coupes3.jpg" style="width: 120px; height: 120px;">
          <h2>Règlement</h2>
          <p>Règlement du tournoi</p>
          <p><a class="btn btn-default" href="reglement.php" role="button">Détails &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">-->
          <img class="img-circle" src="/tournoi/images/coupes.jpg" style="width: 120px; height: 120px;">
          <h2>Inscriptions</h2>
          <p>
          Participants
          </p>
          <p><a class="btn btn-default" href="participant.php" role="button">Détails &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">-->
          <img class="img-circle" src="/tournoi/images/coupes2.jpg" style="width: 120px; height: 120px;">
          <h2>Planning</h2>
          <p>
          Groupes et horaires
          </p>
          <p><a class="btn btn-default" href="planning.php" role="button">Détails &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">-->
          <img class="img-circle" src="/tournoi/images/coupes3.jpg" style="width: 120px; height: 120px;">
          <h2>Classement</h2>
          <p>Classement final du tournoi</p>
          <p><a class="btn btn-default" href="classement.php" role="button">Détails &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2">
          <!-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">-->
          <img class="img-circle" src="/tournoi/images/lorissports.jpg" style="width: 120px; height: 120px;">
          <h2>Partenaires</h2>
          <p>
          Sponsors et partenaires
          </p>
          <p><a class="btn btn-default" href="sponsor.php" role="button">Détails &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      
      <?php // parcours du dossier photos 
		$nbFichiers=0;
		$dir = "photos";
		$dossier = opendir($dir);
		while(false !== ($fichier = readdir($dossier))) {
			if($fichier != '.' && $fichier != '..') {
				$nbFichiers++;
				
				echo "<hr class=\"featurette-divider\">";
				echo "<div class=\"row featurette\">";
				if ($nbFichiers % 2 == 0) {
					echo "<div class=\"col-md-7\">";
					echo "<h2 class=\"featurette-heading\">$fichier <span class=\"text-muted\"></span></h2>";
					echo "<p class=\"lead\"></p>";
					echo "</div>";
					echo "<div class=\"col-md-5\">";
					echo "<img class=\"featurette-image img-responsive\" src=\"$dir/$fichier\" alt=\"Generic placeholder image\">";
					echo "</div>";
				} else {
					echo "<div class=\"col-md-5\">";
					echo "<img class=\"featurette-image img-responsive\" src=\"$dir/$fichier\" alt=\"Generic placeholder image\">";
					echo "</div>";
					echo "<div class=\"col-md-7\">";
					echo "<h2 class=\"featurette-heading\">$fichier <span class=\"text-muted\"></span></h2>";
					echo "<p class=\"lead\"></p>";
					echo "</div>";
				}
				echo "</div>";
			}
		}
		closedir($dossier);
?>
      <?php /*?>
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/u13botevvratza.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Botev Vratza U13 <span class="text-muted">(Bulgarie)</span></h2>
          <p class="lead"></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Botev Vratza U11 <span class="text-muted">(Bulgarie)</span></h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5">
          <!-- <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/u11botevvratza.jpg" alt="Generic placeholder image">          
        </div>
      </div>
      
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/u13montignylesmetz.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Montigny Les Metz U13 <span class="text-muted"></span></h2>
          <p class="lead"></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Montigny Les Metz U11 <span class="text-muted"></span></h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5">
          <!-- <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/u11montignylesmetz.jpg" alt="Generic placeholder image">          
        </div>
      </div>
      
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/U13laneuveville.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Laneuveville Dvt Nancy U13 <span class="text-muted">(Meurthe & Moselle)</span></h2>
          <p class="lead"></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">CSO Blénod U11 <span class="text-muted">(Meurthe & Moselle)</span></h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5">
          <!-- <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/U11blenod.jpg" alt="Generic placeholder image">          
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/U13blenod.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">CSO Blénod U13 <span class="text-muted">(Meurthe & Moselle)</span></h2>
          <p class="lead"></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Templiers Nandrins U13 <span class="text-muted">(Belgique)</span></h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5">
          <!-- <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/U13_TempliersNandrins.jpg" alt="Generic placeholder image">          
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/U11_TempliersNandrins.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Templiers Nandrins U11 <span class="text-muted">(Belgique)</span></h2>
          <p class="lead"></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Apm Metz U13 <span class="text-muted">(Moselle)</span></h2>
          <p class="lead">Vainqueur du tournoi 2014 en catégorie U13.</p>
        </div>
        <div class="col-md-5">
          <!-- <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/apmu13.jpg" alt="Generic placeholder image">          
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <!--<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/jarvilleu11.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">JSF Jarville U11 <span class="text-muted">(Meurthe et Moselle)</span></h2>
          <p class="lead">Vainqueur du tournoi 2014 en catégorie U11.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">AS Ermont <span class="text-muted">(Val d'Oise)</span></h2>
          <p class="lead">Vainqueur du challenge du fair-play Europe1 en 2014</p>
        </div>
        <div class="col-md-5">
          <!--<img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">-->
          <img class="featurette-image img-responsive" src="/tournoi/<?php echo $annee; ?>/photos/ermont2014.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      <?php */ ?>
    
		<!-- FOOTER -->
		<footer>
			<p class="pull-right"><a href="#">Haut de page</a></p>
			<p>&copy; 2015 Association Sportive Saint-Julien-Lès-Metz &middot; <a href="#">Conditions d'utilisation</a></p>
		</footer>
    </div>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/tournoi/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/tournoi/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
ob_end_flush();
?>