
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
			<?php include "function.php"; ?>
			<?php get_prod_search_update(); ?>
		</ul>  
		<br><br><br><br><br><br>
		</section>
		<footer>
				<br>
			<h3 style="color:white;text-align: center;">Contact us through social media</h3><br>

			<div style="margin:0px 485px; width: 600px; height: 50px;">
				<ul>
				<li><a href="https://facebook.com" class="fa"><img src="image/fa.png"></a></li>
				<li><a href="https://instagram.com" class="fa"><img src="image/insta.png"></a></li>
				<li><a href="https://youtube.com" class="fa"><img src="image/you.png"></a></li>
				<li><a href="https://gmail.com" class="fa"><img src="image/gm.png"></a></li>
				</ul>
			</div>

			<br>
			<p style="color:white;text-align: center;">
				<br>
				Email:&nbsp; ebenlas@gmail.com <br><br>
				Mobile:&nbsp; &nbsp; +33632******


			</p>
		</footer>

	</div>
</body>
</html>