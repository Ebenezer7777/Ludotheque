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
			<br><br><br><br><br><br>
			<form method="POST" action="retour.php">

				<?php
				include './dbconnection.php';
				$row = $connect->prepare("select * from booking");
				$row->execute(array());
				if ($row->rowcount() > 0) {
					echo '<table border="1">';
					echo "<tr>
							<td style='width: 500px;height: 70px; background: rgb(33, 126, 143);;'><h3><font color='#abcdef'>Titre</font></h3></td>
							<td style='width: 500px;height: 70px; background: rgb(33, 126, 143);;'><h3><font color='#abcdef'>Date Retour</font></h3></td>
					  </tr>";
					while ($ro = $row->fetch()) {
						$r = $ro['ID_Game'];
						$d = $ro['ReturnDate'];
						$titre = $connect->query("select * from games where ID_Game='$r'");

						while ($re = $titre->fetch()) {
							echo "<tr>";
							echo "<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>" . $re['name'] . "</font></h3></td>";
							echo "<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>" . $d . "</font></h3></td>";
							echo "<tr>";
						}
					}
					echo "</table>";
				} else {
					echo '<center><font color="#d2e4e4" size="9">Aucun jeu vous été commander</font></center>';
				}
				?>
			</form>
			<br><br><br><br><br><br>
			<section>


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