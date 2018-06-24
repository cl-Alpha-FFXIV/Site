<?php require('includes/config.php'); ?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <link rel="shortcut icon" href="./Images/favicon.ico" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="./css/bootstrap-4-hover-navbar.css" rel="stylesheet">

    <title>Alpha - CL FFXIV</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark btco-hover-menu">
      <a class="navbar-brand" href="./accueil.php">
        <img src="./Images/logoAlpha.png" width="30" height="30" alt="">
        CL Alpha
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="./presentation.php">Présentation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./articles.php">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./galerie.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./planning.html">Planning</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Guides
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1xcxYmp5vuXHWq2lUsbcUJnZws_dPIBBy-r8VoCrG0dA">Débutants</a></li>
              <h5 class="dropdown-header bg-dark text-light">Jobs</h6>
              <li><a class="dropdown-item bg-dark text-light dropdown-toggle">Tanks</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Paladin_NB.png" width="32" height="32" alt="">
                    Paladin
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Guerrier_NB.png" width="32" height="32" alt="">
                    Guerrier
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1wYJFjgRUYMPONB5vF7f_uclF-JFXeoCMpbXwCaVpYfY">
                    <img src="./Images/Job_Icon/Chevalier_Noir.png" width="32" height="32" alt="">
                    Chevalier Noir
                  </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item bg-dark text-light dropdown-toggle">Soigneurs</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1kYYQjKLyugCL8p7SDJ9vuk3tkSbzi_qF8LqPks3ytp4">
                    <img src="./Images/Job_Icon/Mage_Blanc.png" width="32" height="32" alt="">
                    Mage Blanc
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Erudit_NB.png" width="32" height="32" alt="">
                    Érudit
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1TFqttqjpHm4bKCYTIM1kBqu3chA37_-MbmvyZan-jQw">
                    <img src="./Images/Job_Icon/Astromancien.png" width="32" height="32" alt="">
                    Astromancien
                  </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item bg-dark text-light dropdown-toggle">DPS Corps à Corps</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Moine_NB.png" width="32" height="32" alt="">
                    Moine
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Chevalier_Dragon_NB.png" width="32" height="32" alt="">
                    Chevalier Dragon
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Ninja_NB.png" width="32" height="32" alt="">
                    Ninja
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1s8hO0WCTXRyKpF1pTfJ_iawV4Y_uSExYf1InY6uqxkc">
                    <img src="./Images/Job_Icon/Samourai.png" width="32" height="32" alt="">
                    Samouraï
                  </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item bg-dark text-light dropdown-toggle">DPS Distance</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1X4K_7otfcI-m1AmkzqXHnsU-iwVMEDU_mnbAwc3DrCQ">
                    <img src="./Images/Job_Icon/Barde.png" width="32" height="32" alt="">
                    Barde
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1FlDpEaLGtjP0_iO5BE22nxMBDIB8SX-sTpXkbieZBgw">
                    <img src="./Images/Job_Icon/Machiniste.png" width="32" height="32" alt="">
                    Machiniste
                  </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item bg-dark text-light dropdown-toggle" href="#">DPS Magiques</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Mage_Noir_NB.png" width="32" height="32" alt="">
                    Mage Noir
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/11GU8V2jckKKe7z8K4BPZ7YnLFq04yM6S0mRFerdwGdY">
                    <img src="./Images/Job_Icon/Invocateur.png" width="32" height="32" alt="">
                    Invocateur
                  </a></li>
                  <li><a class="dropdown-item bg-dark text-light" href="#">
                    <img src="./Images/Job_Icon/Mage_Rouge_NB.png" width="32" height="32" alt="">
                    Mage Rouge
                  </a></li>
                </ul>
              </li>
              <h5 class="dropdown-header bg-dark text-light">Craft/Récolte</h6>
                <li><a class="dropdown-item bg-dark text-light dropdown-toggle" href="#">Récolteurs</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1BE_NZ0EMQjLv2wlEz6vHQuY_BRV7OghkfQ_4r5JoegQ">
                      <img src="./Images/Job_Icon/Botaniste.png" width="32" height="32" alt="">
                      Botaniste
                    </a></li>
                    <li><a class="dropdown-item bg-dark text-light" href="https://docs.google.com/document/d/1seEj2qfCGezq99aSwAh7BJvc0k3OnIUxsbyQ8Hn0mrA">
                      <img src="./Images/Job_Icon/Mineur.png" width="32" height="32" alt="">
                      Mineur
                    </a></li>
                    <li><a class="dropdown-item bg-dark text-light" href="#">
                      <img src="./Images/Job_Icon/Pecheur.png" width="32" height="32" alt="">
                      Pêcheur
                    </a></li>
                  </ul>
                </li>
            </ul>
          </li>
          <li>
          </li>
        </ul>
        <a class="nav-link" href="https://www.twitch.com/clalphaffxiv"><span style="font-size: 30px; color: white;"><i class="fab fa-twitch"></i></span></a>
        <a class="nav-link" href="https://www.youtube.com/channel/UCJkON46FXMqh8rRD2QzvouQ"><span style="font-size: 30px; color: white;"><i class="fab fa-youtube"></i></span></a>
      </div>
    </nav>


    <br>
	<div class="container">
    <img src="./Images/Logo_Alpha_dark.png" class=" img-fluid center" style="max-width:460px;max-height:319px;"></img>
	</div>
    <br>
    <br>
    <div class="container ">
      <div id="carouselAnnonces" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php
            $nb_images = 0;
            $dirname = "./Images/Annonces/";
            $images = glob($dirname."*.png");
            foreach($images as $image) {
              echo '<li data-target="#carouselAnnonces" data-slide-to="';
              echo $nb_images;
              echo '"';
			  if($nb_images == 0){ echo ' class="active"';}
			  echo '"></li> ';
            }
            ?>
        </ol>
        <div class="carousel-inner">
          <?php
            $class_active = true;
            $dirname = "./Images/Annonces/";
            $images = glob($dirname."*.png");
            foreach($images as $image) {
              echo '<div class="carousel-item ';
			  if($class_active == true){ echo 'active' ; $class_active = false;}
			  echo '"><img  class="d-block w-100 rounded" src="';
			  echo $image;
			  echo '" /></div> ';
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselAnnonces" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselAnnonces" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <div class="container-fluid text-center">
      <br>
      <div class="row">
        <div class="col-5 center">
          <div class="line"></div>
        </div>
        <div class="col-2">
          <img src="./Images/ffxivmeteorlogo.png" class="center img-fluid" style="max-width:93px;max-height:100px;"alt="">
        </div>
        <div class="col-5 center">
          <div class="line"></div>
        </div>
      </div>
      <br>
    </div>


    <div class="container bg-dark text-light">
      <br>
      <div class="row">
        <div class="col-12 text-center">
          <a href="./planning.html">
          <img src="./Images/Rappel_Sorties.png" class="img-fluid" alt="Sortie du week end : Pensez à vous inscrire !">
          <!--@everyone-->
		  </a>
        </div>
      </div>
      <br>
      <div class="row justify-content-between">

        <div class="col test-left text-light">
          <h1 class="display-4">Derniers articles</h1>
          <hr class="text-light">
          <ul>
            <?php
              $stmt = $db->query('SELECT postTitle, postID, postDesc FROM blog_posts ORDER BY postID DESC LIMIT 5');
              while($row = $stmt->fetch()){
                echo '<li ><h4><a class="text-light" href="./viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'<small class="text-muted">'.$row['postDesc'].'</small></a></h4></li>';
              }
            ?>
          </ul>
        </div>
        <div class="col-auto text-right">
          <iframe src="https://discordapp.com/widget?id=194076527774793738&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
      </div>
      <div class="row">
        <div class="col-8 text-left align-middle">
          <br>
          <br>
          <div class="embed-responsive embed-responsive-16by9">
            <!-- Add a placeholder for the Twitch embed -->
            <div id="twitch-embed"></div>
            <!-- Load the Twitch embed script -->
            <script src="https://embed.twitch.tv/embed/v1.js"></script>
            <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
            <script type="text/javascript">
              new Twitch.Embed("twitch-embed", {
                width: 720,
                height: 500,
                layout: "video",
                channel: "clalphaffxiv"
              });
            </script>
          </div>
          <br>
          <br>
        </div>
        <div class="col-auto text-right">
          <a class="twitter-timeline" data-lang="fr" data-width="350" data-height="500" data-theme="dark" data-link-color="#F5F8FA" href="https://twitter.com/Alpha_ffxiv?ref_src=twsrc%5Etfw">Tweets by Alpha_ffxiv</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
      </div>
	  <br>
    <div class="row center">
    <div class="carousel slide center" data-ride="carousel">
      <div class="carousel-inner">
        <?php
          $class_active = true;
          $dirname = "./Images/Galerie/";
          $images = glob($dirname."*.png");
          $randomImage1 = $images[array_rand($images)];
          $randomImage2 = $images[array_rand($images)];
          $randomImage3 = $images[array_rand($images)];
          echo '<div class="carousel-item active"><img  class="d-block w-100 rounded" src="';
          echo $randomImage1;
          echo '" /></div> ';

          echo '<div class="carousel-item"><img  class="d-block w-100 rounded" src="';
          echo $randomImage2;
          echo '" /></div> ';

          echo '<div class="carousel-item"><img  class="d-block w-100 rounded" src="';
          echo $randomImage3;
          echo '" /></div> ';
          ?>
        </div>
      </div>
      <br>
      </div>
      <div class="row">
        <!-- start feedwind code -->
        <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="82911/"></script>
        <!-- end feedwind code -->
      </div>
    </div>
    </div>

    </div>

    <br>
    <div class="container-fluid bg-black">
        <div class="row">

          <div class="col text-right">
            <!--<a href="https://www.freepik.com/free-vector/various-silhouettes-of-wolves_1162411.htm">Designed by Freepik</a>-->
          </div>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="./js/bootstrap-4-hover-navbar.js"></script>
  </body>
</html>
