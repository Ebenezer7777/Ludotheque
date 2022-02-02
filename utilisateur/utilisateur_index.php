<?php include "function.php"; ?>
<?php booking(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/Header.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/Footer.css" />
  <link rel="stylesheet" href="../css/Article.css" />
  <script src="https://kit.fontawesome.com/7dbcee25ff.js" crossorigin="anonymous"></script>
  <title>Bienvenue a la Ludotheque du Plaisir</title>
</head>

<body>
  <header class="header">
    <div class="logo">
      <img src="../images/logo.png" alt="" style="width:130px ; height:100px;" />
    </div>


    <div class="right0">
            <i class="fas fa-home"><a href="../accueil.html">Accueil</a></i>
        </div>
        <div>
            <i class="fas fa-store"><a href="./utilisateur_index.php">Reservation</a></i>
        </div>
        <div>
            <i class="fas fa-shopping-cart"><a href="./booking.php">Mes Emprunts</a></i>
        </div>
        <div class="right1">
            <i class="fas fa-sign-in-alt"><a href="../Inscription/">Sign in/on</a></i>
        </div>

  </header>
  <section>
    <br><br><br>
    <div id="main-nav">
      <center>
        <div id="search">
          <form action="search.php" method="GET">
            <input class="search-area" type="text" name="searcharea" placeholder="chercher votre jeu">
            <button class="search-btn" type="submit" name="search"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </center>
    </div>
    <br><br><br>
    <ul>
      <?php get_pro(); ?>
    </ul>
    <br><br><br><br><br><br>
  </section>
  
  <br>
    <br>
    <br>

</body>

</html>