<?php
session_start(); // Starting Session
//include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: accueil.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Connexion</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    
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
  </head>
  <body>
	<?php include_once("analyticstracking.php") ?>
    <div class="container">

      <form class="form-signin" action="action/Login.php" method="post">
        <h2 class="form-signin-heading">Connectez vous</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Adresse mail" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
        <input type="hidden" name="submit" value="submit"/>
        <span><?php echo isset($_SESSION['error']) ? $_SESSION['error'] : ""; ?></span>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>