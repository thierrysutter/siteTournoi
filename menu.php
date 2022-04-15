<?php /*
	<nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/tournoi/index.php">Accueil</a>
            <!-- <a class="navbar-brand" href="/tournoi/2015/accueil2015.php">Edition 2015</a>-->
            <!-- <a class="navbar-brand" href="/tournoi/accueil2016.php">Edition 2016</a> -->
            <a class="navbar-brand" href="/tournoi/participant.php">Participants</a>
            <a class="navbar-brand" href="/tournoi/planning.php">Planning</a>
            <a class="navbar-brand" href="/tournoi/classement.php">R�sultats</a>
            <a class="navbar-brand" href="/tournoi/sponsor.php">Partenaires</a>
            <a class="navbar-brand" href="/tournoi/reglement.php">R�glement</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- <li class="active"><a href="index.php">Accueil</a></li>-->
              <!-- <li><a href="#">R�glement</a></li>
              <li><a href="#">Edition 2015</a></li> -->


              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Historique <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/tournoi/2015/accueil2015.php">Edition 2015</a>
                  <li><a href="#">Edition 2014</a></li>
                  <li><a href="#">Edition 2013</a></li>
                  <li><a href="#">Edition 2012</a></li>
                  <li><a href="#">Edition 2011</a></li>
                  <li><a href="#">Edition 2010</a></li>
                  <li><a href="#">Edition 2009</a></li>
                  <!-- <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>-->
                </ul>
              </li>


              <li class=""><a href="/tournoi/contact.php">Contact <span class="sr-only">(current)</span></a></li>
              <!-- <li><a href="../navbar-static-top/">Contact</a></li>
              <li><a href="../navbar-fixed-top/">Deconnexion</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      */?>



<nav class="navbar navbar-default navbar-inverse">

    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                <span class="sr-only">

                    Toggle navigation

                </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">

                Tournoi International

            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a class="navbar-brand" href="participant.php">

                        Participants

                    </a>
                </li>

                <li class="dropdown">
                    <a class="navbar-brand dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="planning.php">

                        Plannning

                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="planning.php">

                                Tirage au sort

                            </a>
                        </li>
                        <li>
                            <a href="planningU11.php">

                                U11

                            </a>
                        </li>
                        <li>
                            <a href="planningU13.php">

                                U13

                            </a>
                        </li>
                    </ul>
                </li>

				
                <li class="">
                    <a class="navbar-brand " href="classement.php">

                        Résultats

                    </a>
                    <!--<ul class="dropdown-menu">
                        <li>
                            <a href="#">

                                U11

                            </a>
                        </li>
                        <li>
                            <a href="#">

                                U13

                            </a>
                        </li>
                    </ul>-->
                </li>
                
                <!-- <li>
                    <a class="navbar-brand" href="sponsor.php">

                        Partenaire

                    </a>
                </li>-->
                <li>
                    <a class="navbar-brand" href="reglement.php">

                        Réglement

                    </a>
                </li>

              <li class="dropdown">
                <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Historique <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="2015/accueil2015.php">Edition 2015</a>
                  <li><a href="#">Edition 2014</a></li>
                  <li><a href="#">Edition 2013</a></li>
                  <li><a href="#">Edition 2012</a></li>
                  <li><a href="#">Edition 2011</a></li>
                  <li><a href="#">Edition 2010</a></li>
                  <li><a href="#">Edition 2009</a></li>
                </ul>
              </li>
              <li class=""><a class="navbar-brand" href="contact.php">Contact <span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
    </div>
</nav>
