<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

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
	<br>
    <div class="container bg-dark text-light" id="wrapper">
		<div class="row border-bottom">
			<div class="col-12 text-center">
				<br>
				<div class="display-1">Alpha</div>
				<br>
			</div>
		</div>
		<div class="row">
		<div class="col-1"></div>
			<div class="col-10">
				<br>
				<br>
				<div class="display-4">Qui sont les Alpha</div>
        <p>
          <br>
          Nous sommes une Compagnie Libre francophone, sur Final Fantasy XIV, serveur Phoenix
          <br>
          <br>
          Fondée début 2015 par Azazel Nova, Deathangel Aeternum, Osiris Lanaine et Saeko Saijitsu, elle a fait son petit bonhomme de chemin, non sans déboires, pour arriver là ou elle est.
          <br>
          <br>
          Aujourd'hui, la CL est dirigée par un conseil de 5 officiers, et fait tout son possible pour répondre aux attentes de tous types de joueurs. Du contenu HL avec le roster, ou des contenus plus casual durant les sorties du weekend, de l'entraide pour le leveling, des conseils pour le craft et la récolte, et même un expert en Gold Saucer !
          <br>
          <br>
        </p>
        <div class="display-4">Le Conseil des <del>Quatre</del> Cinq</div>
				<br>
        <div class="card-deck">
          <div class="card bg-secondary">
            <img class="card-img-top" src="./Images/Presentation/Alwine.png" alt="Une miqo'te bleue">
            <div class="card-body">
              <h5 class="card-title text-center">Alwine Bellamy</h5>
              <a class="center" target="_blank" href="https://fr.finalfantasyxiv.com/lodestone/character/10482593/"><img class="center" src="./Images/Presentation/ffxivmeteorlogo2.png" width="31" height="32"></img></a>
            </div>
          </div>
          <div class="card bg-secondary">
            <img class="card-img-top" src="./Images/Presentation/Naryla.png" alt="Un troll">
            <div class="card-body">
              <h5 class="card-title text-center">Naryla Majora</h5>
              <a class="center" target="_blank" href="https://fr.finalfantasyxiv.com/lodestone/character/10245728/"><img class="center" src="./Images/Presentation/ffxivmeteorlogo2.png" width="31" height="32"></img></a>
            </div>
          </div>
          <div class="card bg-secondary">
            <img class="card-img-top" src="./Images/Presentation/Sumire.png" alt="Une mignonne potato">
            <div class="card-body">
              <h5 class="card-title text-center">Sumire Tasuky</h5>
              <a class="center" target="_blank" href="https://fr.finalfantasyxiv.com/lodestone/character/7987472/"><img class="center" src="./Images/Presentation/ffxivmeteorlogo2.png" width="31" height="32"></img></a>
            </div>
          </div>
          <div class="card bg-secondary">
            <img class="card-img-top" src="./Images/Presentation/Valender.png" alt="Une potato">
            <div class="card-body">
              <h5 class="card-title text-center">Valender Blackholm</h5>
              <a class="center" target="_blank" href="https://fr.finalfantasyxiv.com/lodestone/character/10795165/"><img class="center" src="./Images/Presentation/ffxivmeteorlogo2.png" width="31" height="32"></img></a>
            </div>
          </div>
          <div class="card bg-secondary">
            <img class="card-img-top" src="./Images/Presentation/Kaelhula.png" alt="Un caribou">
            <div class="card-body">
              <h5 class="card-title text-center">Kaelhula Sangwis</h5>
              <a class="center" target="_blank" href="https://fr.finalfantasyxiv.com/lodestone/character/17756049/"><img class="center" src="./Images/Presentation/ffxivmeteorlogo2.png" width="31" height="32"></img></a>
            </div>
          </div>
        </div>
        <br>
        <br>
        <div class="display-4">La Maison de Compagnie</div>
        <br>
        <img class="img-fluid" src="./Images/Presentation/panorama.png" alt="Un château Hingashien en plein coeur du Thanalan">
        <p>
          <br>
          Située à La Coupe (secteur 6, emplacement 60), la Maison des Alpha offre tout le confort moderne à ses membres.<br>
          <br>
          Entre son bar à sushi, où sont mis à disposition des plats pour les raideurs, ses ateliers de craft, couvrant tous les métiers, et sa grande salle de réunion, tout est mis en oeuvre pour offrir un lieu de rencontres et de joie.<br>
        </p>
        <br>
        <div class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php
              $class_active = true;
              $dirname = "./Images/Presentation/Maison/";
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
          </div>
          <br>

        </div>
        <div class="col-1"></div>
        </div>
        <div class="row">
          <div class="col-1"></div>
          <div class="col-8">
            <br>
            <div class="display-4">Le Site</div>
            <br>
            <p>
              Issu de la volonté d'accéder plus facilement aux annonces de CL (et aussi à cause d'une immobilisation de 10 jours en attelle), ce site est là pour vous !<br>
              <br>
              Donc si vous avez la moindre remarque/suggestion, n'hésitez pas à venir m'en parler en jeu !
            </p>
          </div>
          <div class="col-2">
            <div class="card bg-secondary">
              <img class="card-img-top" src="./Images/Presentation/Elseyna.png" alt="Une miqo'te sexy">
              <div class="card-body">
                <h5 class="card-title text-center">Elseyna Selenyl</h5>
                <p class="card-text text-center">Webmaster</p>
              </div>
            </div>
          </div>
          <div class="col-1"></div>
        </div>
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10 text-center">
            <br>
            <div class="display-4">Nous avons écrit l'Alpha, à vous d'écrire l'Oméga...<br></div>
            <br>
          </div>
          <div class="col-1"></div>
        </div>
        <br>
		</div>
<br>
<br>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="./js/bootstrap-4-hover-navbar.js"></script>
</body>
</html>
