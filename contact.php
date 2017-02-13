<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Contact</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    
    <!-- Le but de ces appels est de permettre aux navigateurs ne prenant pas en charge HTML5 et les Media Queries CSS3 de le faire ; ils visent essentiellement IE8. Pour obtenir plus de renseignements sur respond.js vous pouvez aller sur la page GitHub. Méfiez-vous en particulier si vous utilisez un CDN pour charger vos styles CSS, parce que respond.js utilise AJAX et vous pouvez buter sur le problème d'accès à plusieurs domaines. -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Custom styles for this template -->
	<link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
	<?php include_once("analyticstracking.php") ?>
  	<div class="container">

      <!-- Static navbar -->
      <?php include("menu.php"); ?>

    </div> <!-- /container -->
    <div class="container">

      <div class="row">     
			<h1 class="text-center"></h1>
			   
			<hr>    
			<div class="col-sm-8">
			<form role="form">
				<div class="row form-group">
					<div class="col-xs-3">
						<input class="form-control" id="nom" name="nom" placeholder="Nom" required="" type="text">
					</div>            
					<div class="col-xs-4">
						<input class="form-control" id="prenom" name="prenom" placeholder="Prénom" required="" type="text">            
					</div>        
				</div>        
				<div class="row form-group">            
					<div class="col-xs-5">                
						<input class="form-control" id="email" name="email" placeholder="Email" required="" type="email">
					</div>
					<div class="col-xs-5">                
						<input class="form-control" name="tel" placeholder="N° téléphone" required="" type="text">
					</div>        
				</div>        
				<div class="row form-group">            
					<div class="col-xs-10">                
						<input class="form-control" name="club" placeholder="Club" required="" type="text">
					</div>        
				</div>
				<div class="row form-group">            
					<div class="col-xs-10">                
						<textarea class="form-control" rows="15" name="message" id="message">Votre message</textarea>
					</div>        
				</div>
				        
				<div class="row form-group">            
					<div class="col-xs-10">                
						<button class="btn btn-default pull-right">Envoyer</button>
					</div>        
				</div>
			</form>
			</div>    
			<div class="col-sm-4 pull-right"> 
				<address>          
					<strong>Association Sportive Saint-Julien-Lès-Metz</strong><br>          
					<span id="adresse-customized">
						Boucle de la bergerie<br>          
						57070 SAINT JULIEN LES METZ<br>          
					</span>          
					Telephone/Fax: 03 87 37 04 34
				</address> 
				<address>          
					<strong>Contact par email</strong><br>
					<a href="mailto:#">contact@assaintjulienlesmetz.com</a>
				</address>     
			</div>
		</div><!--/row-->
		
		

    </div> <!-- /container -->
    
    <div class="container">
     <!-- FOOTER -->
      <footer>
        <p class="pull-right">&copy; 2015 Association Sportive Saint-Julien-Lès-Metz</p>
      </footer>
    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>