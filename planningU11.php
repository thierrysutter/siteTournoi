<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Planning U11</title>

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

    <div class="row">
  <div class="col-xs-12 col-sm-12 text-center"><h1>Planning U11</h1></div>
</div>
<!--
<div class="row">
  <div class="col-xs-6 col-sm-6 text-center">
    <div class="table-responsive">
	  <table class="table table-bordered table-condensed text-center">
	    <tr>
		  <td colspan="3"><h3>Groupe A</h3></td>
		</tr>
		<tr>
		  <td class=""><h4>Heure</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		</tr>
		<tr class="active">
		  <td class="">8h30</td>
		  <td class="">ASNL FEMININES - TEMPLIERS NANDRIN 1</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">8h45</td>
		  <td class="">FC THIONVILLE 2 - FC HAGONDANGE</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">9h17</td>
		  <td class="">FC HAGONDANGE - ASNL FEMININES</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">9h32</td>
		  <td class="">TEMPLIERS NANDRIN 1 - AS PAGNY / MOSELLE</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">10h04</td>
		  <td class="">TEMPLIERS NANDRIN 1 - FC THIONVILLE 2</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">10h19</td>
		  <td class="">AS PAGNY / MOSELLE - ASNL FEMININES</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h08</td>
		  <td class="">FC THIONVILLE 2 - AS PAGNY / MOSELLE</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">11h23</td>
		  <td class="">FC HAGONDANGE - TEMPLIERS NANDRIN 1</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h55</td>
		  <td class="">AS PAGNY / MOSELLE - FC HAGONDANGE</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">12h10</td>
		  <td class="">ASNL FEMININES - FC THIONVILLE 2</td>
		  <td class="">-</td>
		</tr>
	  </table>
	</div>
  </div>

  <div class="col-xs-6 col-sm-6 text-center">
    <div class="table-responsive">
	  <table class="table table-bordered table-condensed text-center">
	    <tr>
		  <td colspan="3"><h3>Groupe B</h3></td>
		</tr>
		<tr>
		  <td class=""><h4>Heure</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		</tr>
		<tr class="active">
		  <td class="">8h30</td>
		  <td class="">AS ST JULIEN 2 - AS ERMONT 1</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">8h45</td>
		  <td class="">CO METZ BELLECROIX - FC THIONVILLE 1</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">9h17</td>
		  <td class="">FC THIONVILLE 1 - AS ST JULIEN 2</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">9h32</td>
		  <td class="">AS ERMONT 1 - AS FLORANGE</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">10h04</td>
		  <td class="">AS ERMONT 1 - CO METZ BELLECROIX</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">10h19</td>
		  <td class="">AS FLORANGE - AS ST JULIEN 2</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h08</td>
		  <td class="">CO METZ BELLECROIX - AS FLORANGE</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">11h23</td>
		  <td class="">FC THIONVILLE 1 - AS ERMONT 1</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h55</td>
		  <td class="">AS FLORANGE - FC THIONVILLE 1</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">12h10</td>
		  <td class="">AS ST JULIEN 2 - CO METZ BELLECROIX</td>
		  <td class="">-</td>
		</tr>
	  </table>
	</div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6 col-sm-6 text-center">
    <div class="table-responsive">
	  <table class="table table-bordered table-condensed text-center">
	    <tr>
		  <td colspan="3"><h3>Groupe C</h3></td>
		</tr>
		<tr>
		  <td class=""><h4>Heure</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		</tr>
		<tr class="active">
		  <td class="">8h30</td>
		  <td class="">USAG UCKANGE - APM METZ</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">8h45</td>
		  <td class="">CHAPELLE ST LUC - TEMPLIERS NANDRIN 2</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">9h17</td>
		  <td class="">APM METZ - CHAPELLE ST LUC</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">9h32</td>
		  <td class="">AS MONTIGNY LES METZ 1 - USAG UCKANGE</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">10h04</td>
		  <td class="">CHAPELLE ST LUC - AS MONTIGNY LES METZ 1</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">10h19</td>
		  <td class="">TEMPLIERS NANDRIN 2 - APM METZ</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h08</td>
		  <td class="">AS MONTIGNY LES METZ 1 - TEMPLIERS NANDRIN 2</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">11h23</td>
		  <td class="">USAG UCKANGE - CHAPELLE ST LUC</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h55</td>
		  <td class="">TEMPLIERS NANDRIN 2 - USAG UCKANGE</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">12h10</td>
		  <td class="">APM METZ - AS MONTIGNY LES METZ 1</td>
		  <td class="">-</td>
		</tr>
	  </table>
	</div>
  </div>

  <div class="col-xs-6 col-sm-6 text-center">
    <div class="table-responsive">
	  <table class="table table-bordered table-condensed text-center">
	    <tr>
		  <td colspan="3"><h3>Groupe D</h3></td>
		</tr>
		<tr>
		  <td class=""><h4>Heure</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		</tr>
		<tr class="active">
		  <td class="">8h30</td>
		  <td class="">AS ERMONT 2 - CSO AMNEVILLE</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">8h45</td>
		  <td class="">AS ST JULIEN 1 - EN ST AVOLD</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">9h17</td>
		  <td class="">CSO AMNEVILLE - AS ST JULIEN 1</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">9h32</td>
		  <td class="">AS MONTIGNY LES METZ 2 - AS ERMONT 2</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">10h04</td>
		  <td class="">AS ST JULIEN 1 - AS MONTIGNY LES METZ 2</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">10h19</td>
		  <td class="">EN ST AVOLD - CSO AMNEVILLE</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h08</td>
		  <td class="">AS MONTIGNY LES METZ 2 - EN ST AVOLD</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">11h23</td>
		  <td class="">AS ERMONT 2 - AS ST JULIEN 1</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="">11h55</td>
		  <td class="">EN ST AVOLD - AS ERMONT 2</td>
		  <td class="">-</td>
		</tr>
		<tr>
		  <td class="">12h10</td>
		  <td class="">CSO AMNEVILLE - AS MONTIGNY LES METZ 2</td>
		  <td class="">-</td>
		</tr>
	  </table>
	</div>
  </div>
</div>

<div class="col-xs-12 col-sm-12 text-center"><h1>Phase 2</h1></div>

<div class="row">
  <div class="col-xs-12 col-sm-12 text-center">
    <div class="table-responsive">
	  <table class="table table-bordered table-condensed text-center">
	  	<tr>
		  <td class=""><h4>Heure</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		  <td class=""><h4>Rencontre</h4></td>
		  <td class=""><h4>Score</h4></td>
		</tr>
		<tr class="active">
		  <td class="" rowspan="2" style="vertical-align: middle;">13h15</td>
		  <td colspan="2"><b>1/4 finale tournoi</b></td>
	  	  <td colspan="2"><b>1/4 finale tournoi</b></td>
		  <td colspan="2"><b>1/4 finale consolante</b></td>
		  <td colspan="2"><b>1/4 finale consolante</b></td>
		</tr>
		<tr class="active">
		  <td class="">1er groupe A - 2�me groupe C</td>
		  <td class="">-</td>
		  <td class="">1er groupe B - 2�me groupe D</td>
		  <td class="">-</td>
		  <td class="">3�me groupe A - 4�me groupe C</td>
		  <td class="">-</td>
		  <td class="">3�me groupe B - 4�me groupe D</td>
		  <td class="">-</td>
		</tr>
		<tr class="">
		  <td class="" rowspan="2" style="vertical-align: middle;">13h30</td>
		  <td colspan="2"><b>1/4 finale tournoi</b></td>
	  	  <td colspan="2"><b>1/4 finale tournoi</b></td>
		  <td colspan="2"><b>1/4 finale consolante</b></td>
		  <td colspan="2"><b>1/4 finale consolante</b></td>
		</tr>
		<tr class="">
		  <td class="">1er groupe C - 2�me groupe A</td>
		  <td class="">-</td>
		  <td class="">1er groupe D - 2�me groupe B</td>
		  <td class="">-</td>
		  <td class="">3�me groupe C - 4�me groupe A</td>
		  <td class="">-</td>
		  <td class="">3�me groupe D - 4�me groupe B</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="" rowspan="2" style="vertical-align: middle;">13h45</td>
		  <td colspan="8"><b>17�me � 20�me place</b></td>
		</tr>
		<tr class="active">
		  <td class="" colspan="3">5�me groupe C - 5�me groupe A</td>
		  <td class="">-</td>
		  <td class="" colspan="3">5�me groupe B - 5�me groupe D</td>
		  <td class="">-</td>
		</tr>
		<tr class="">
		  <td class="" rowspan="2" style="vertical-align: middle;">14h34</td>
		  <td colspan="2"><b>5�me � 8�me place</b></td>
	  	  <td colspan="2"><b>5�me � 8�me place</b></td>
		  <td colspan="2"><b>13�me � 16�me place</b></td>
		  <td colspan="2"><b>13�me � 16�me place</b></td>
		</tr>
		<tr class="">
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="" rowspan="2" style="vertical-align: middle;">14h49</td>
		  <td colspan="2"><b>1/2 finale tournoi</b></td>
	  	  <td colspan="2"><b>1/2 finale tournoi</b></td>
		  <td colspan="2"><b>1/2 finale consolante</b></td>
		  <td colspan="2"><b>1/2 finale consolante</b></td>
		</tr>
		<tr class="active">
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		  <td class="">-</td>
		</tr>
		<tr class="">
		  <td class="" rowspan="2" style="vertical-align: middle;">15h04</td>
		  <td colspan="4"><b>19�me et 20�me place</b></td>
	  	  <td colspan="4"><b>17�me et 18�me place</b></td>
		</tr>
		<tr class="">
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="" rowspan="2" style="vertical-align: middle;">15h53</td>
		  <td colspan="4"><b>13�me et 14�me place</b></td>
	  	  <td colspan="4"><b>15�me � 16�me place</b></td>
		</tr>
		<tr class="active">
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		</tr>
		<tr class="">
		  <td class="" rowspan="2" style="vertical-align: middle;">16h10</td>
		  <td colspan="4"><b>9�me et 10�me place</b></td>
	  	  <td colspan="4"><b>11�me � 12�me place</b></td>
		</tr>
		<tr class="">
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="" rowspan="2" style="vertical-align: middle;">16h27</td>
		  <td colspan="4"><b>5�me et 6�me place</b></td>
	  	  <td colspan="4"><b>7�me � 8�me place</b></td>
		</tr>
		<tr class="active">
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		  <td colspan="3" class="">-</td>
		  <td class="">-</td>
		</tr>
		<tr class="">
		  <td class="" rowspan="2" style="vertical-align: middle;">16h44</td>
		  <td colspan="8"><b>3�me et 4�me place</b></td>
		</tr>
		<tr class="">
		  <td colspan="7" class="">-</td>
		  <td class="">-</td>
		</tr>
		<tr class="active">
		  <td class="" rowspan="2" style="vertical-align: middle;">17h01</td>
		  <td colspan="8"><b>Finale</b></td>
		</tr>
		<tr class="active">
		  <td colspan="7" class="">-</td>
		  <td class="">-</td>
		</tr>
	  </table>
	</div>
  </div>
</div>
 -->
 <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Haut de page</a></p>
        <p>&copy; 2015 Association Sportive Saint-Julien-L�s-Metz &middot; <a href="#">Conditions d'utilisation</a></p>
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