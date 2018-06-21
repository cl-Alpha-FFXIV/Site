<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

	  <link rel="shortcut icon" href="./Images/favicon.ico" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

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
          <li class="nav-item">
            <a class="nav-link" href="./galerie.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active-item" href="./articles.php">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./presentation.html">Présentation</a>
          </li>
        </li>
      </ul>
      <a class="nav-link" href="https://www.youtube.com/channel/UCJkON46FXMqh8rRD2QzvouQ"><i class="fas fa-youtube"></i></a>
    </div>
  </nav>

	<br>
	<br>
    <div class="container bg-dark text-light" id="wrapper">
		<div class="row border-bottom">
			<div class="col-12 text-center">
				<br>
				<div class="display-1">Articles</div>
				<br>
			</div>
		</div>
		<div class="row">
		<div class="col-1"></div>
			<div class="col-10">
				<br>
				<br>
				<?php
					try {

						$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
						while($row = $stmt->fetch()){

							echo '<div>';
								echo '<h2><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
								echo '<p>Posté le '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
								echo '<p>'.$row['postDesc'].'</p>';
								echo '<p><a href="viewpost.php?id='.$row['postID'].'">Plus...</a></p>';
							echo '</div><br>';

						}

					} catch(PDOException $e) {
						echo $e->getMessage();
					}
				?>
			</div>
			<div class="col-1"></div>
		</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="./js/bootstrap-4-hover-navbar.js"></script>
</body>
</html>
