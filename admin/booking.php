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
    <script
      src="https://kit.fontawesome.com/7dbcee25ff.js"
      crossorigin="anonymous"
    ></script>
    <title>Bienvenue a la Ludotheque du Plaisir</title>
  </head>

  <body>
	  
    <header class="header">
      <div class="logo">
        <img  src="../images/logo.png" alt="" style="width:130px ; height:100px;" />
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
		<br><br><br><br><br><br>
		<form method="POST" action="retour.php">

		<?php
			include './dbconnection.php';
			$row=$connect->prepare("select * from booking ");
			$row->execute(array());
			if($row->rowcount() > 0){
				echo '<table border="1">';
				echo "<tr>
							<td style='width: 500px;height: 70px; background: rgb(33, 126, 143);'><h3><font color='#abcdef'>Nom Utilisateur</font></h3></td>
							<td style='width: 500px;height: 70px; background: rgb(33, 126, 143);'><h3><font color='#abcdef'>Titre Game</font></h3></td>
							<td style='width: 500px;height: 70px; background: rgb(33, 126, 143);'><h3><font color='#abcdef'>Date</font></h3></td>
							<td style='width: 500px;height: 70px; background: rgb(33, 126, 143);'><h3><font color='#abcdef'>Date Retour</font></h3></td>
							<td style='width: 500px;height: 70px;'><h3></h3></td>
							<td style='width: 500px;height: 70px; '><h3></font></h3></td>
					  </tr>";
				while($ros=$row->fetch()){
					$r=$ros['ID_Game'];
					$a=$ros['ID_Member'];
					$d=$ros['Date'];
					$dd=$ros['ReturnDate'];
					$titre=$connect->query("select * from games where ID_Game='$r'");
					$nme=$connect->query("select * from member where ID_Member='$a'");


					while($re=$titre->fetch()){
						$e=$nme->fetch();
						echo '<table border="1">';
						echo "<td style='width: 500px;height: 10px;'><h3><font color='#000000'>".$e['Name']."</font></h3></td>";
						echo "<td style='width: 500px;height: 10px;'><h3><font color='#000000'>".$re['name']."</font></h3></td>";
						echo "<td style='width: 500px;height: 10px;;'><h3><font color='#000000'>".$d."</font></h3></td>";
						echo "<td style='width: 500px;height: 10px;;'><h3><font color='#000000'>".$dd."</font></h3></td>";
						echo "<td style='width: 500px;height: 10px; ;'><a href='retour.php'><button value='";
						echo $re['ID_Game'];
						echo"' name='id'><h3>Retour jeu</h3></button></a></td>";
						echo "<tr>";
					}
				}
				echo "</table>";

			}else{
				echo '<center><font color="#d2e4e4" size="9">Aucun jeu vous été commander</font></center>';
			}
		?>
		</form>
		<br><br><br><br><br><br>
		<section>

		<br><br><br><br><br><br><br><br><br><br><br><br>
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
	
	<script src="./js/Barre_recherche.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>