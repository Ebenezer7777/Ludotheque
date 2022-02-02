<?php include "./dbconnection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/Header.css" />
  <link rel="stylesheet" href="../css/Footer.css" />
  <link rel="stylesheet" href="../css/Article.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <script src="https://kit.fontawesome.com/7dbcee25ff.js" crossorigin="anonymous"></script>
  <title>Bienvenue a la Ludotheque du Plaisir</title>
</head>

<body>
 
    <header class="header">
      <div class="logo">
        <img src="../images/logo.png" alt="" style="width:130px ; height:100px;" />
      </div>


      <div class="right0">
			<i class="fas fa-home"><a href="./admin_index.php">Accueil</a></i>
		</div>
		<div>
			<i class="fas fa-plus-square"><a href="./addpro.php">AddGames</a></i>
		</div>
		<div>
			<i class="fas fa-minus-square"><a href="./delete.php">SuppGames</a></i>
		</div>
		<div >
		<i class="fas fa-edit"><a href="./update.php">UpdateGame</a></i>
		</div>
		<div class="right1">
		<i class="fas fa-arrow-circle-left"><a href="./booking.php">ReturnGames</a></i>
		</div>
    </header>
    <div>
    <section>
      <br><br><br>
      <div id="main-nav">
        <center>
          <div id="search">
            <form action="search_delete.php" method="GET">
              <input class="search-area" type="text" name="searcharea" placeholder="chercher votre livre">
              <button class="search-btn" type="submit" name="search"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </center>
      </div>
      <br><br><br>
      <ul>
        <?php include "./function.php"; ?>
        <?php get_pro_sup(); ?>
      </ul>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>
    </div>

    <footer class="Footer">
      <div>
        <p style="color: rgb(255, 255, 255); font-size: larger;">Nous contacter</p>
        <input type="text">
        <input type="text">
        <input type="button" value="Envoyer">
      </div>
      <br>
      <div class="iconReseau">
        <!--NOUS SUIVRE SUR LES RESEAUX SOCIAUX-->
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
      </div>
    </footer>
 
</body>

</html>