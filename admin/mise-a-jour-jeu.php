<?php
session_start();
include './dbconnection.php';
//post value

if (isset($_POST['addpro'])) {
	$type = @$_POST['type'];
	$p_key_word = @$_POST['p_key_word'];
	$name = @$_POST['name'];
	$description = @$_POST['description'];
	$dir_name = dirname(__FILE__) . "./image";
	$img = @$_FILES['img']['name'];
	$img_type = @$_FILES['img']['type'];
	$img_size = @$_FILES['img']['size'];
	$img_error = @$_FILES['img']['error'];
	$img_tmp = @$_FILES['img']['tmp_name'];
	$age = @$_POST['age'];

	if (!empty($_POST['type']) && !empty($_POST['p_key_word']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty(($_FILES['img']['name'])) && !empty($_POST['age'])) {
	
		print_r($_POST);
		//move upload img
		move_uploaded_file($img_tmp, $dir_name.$img);

		//insert pro
		$request = $connect->prepare("INSERT INTO games VALUES (NULL,?,?,?,?,?,?)");
		$request->execute(array($_POST['type'], $_POST['p_key_word'], $_POST['name'], $_POST['description'], $_FILES['img']['name'],  $_POST['age']));
		$request = $connect->prepare("SELECT * FROM games WHERE ID_Game=?");
		$request->execute(array(htmlspecialchars($_GET['ID_Game'])));

	}
}
?>
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
			<img class="img" src="../images/logo.png" alt="" style="width:130px ; height:100px;" />
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
		<br><br>

		<section>
		<br><br>
		<div class="log_img">
			<br>
			<div class="box1">
				<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;color:#000000;">LUDOTHEQUE</h1><br>
				<h1 style="text-align: center; font-size: 25px; color:#000000;">Mise  A Jour Du jEU</h1><br>
				<form name="f" action="./mise-a-jour-jeu.php" method="POST" enctype="multipart/form-data">
					<div class="f">
						<p style="color:#000000;">Titre du jeu:</p>
						<input type="text" name="titre" placeholder="Titre du jeu" required="" style="height:40px;" /><br><br>
						<p style="color: #000000;">Type du jeu:</p>
						<input type="text" name="type" placeholder="Type du jeu" required="" style="height:40px;" /><br><br>
						<p style="color: #000000;">Tranche D'Age:</p>
						<input type="number" name="age" placeholder="Tranche D'Age" required="" style="height:40px;" /><br><br>
						<p style="color: #000000;">Photo:</p>
						<input type="file" name="img" required="" style="height:40px;color: #000000;" /><br>
						<p style="color: #000000;">Mot de recherche(exemple : Titre du jeu):</p>
						<input type="text" name="p_key_word" placeholder="Mot de recherche" required="" style="height:40px;" /><br><br>
						<p style="color:#000000;">Description:</p>
						<input type="text" name="description" placeholder="Description" required="" style="height:40px;" /><br><br>
						<input class="submit" type="submit" name="addpro" value="Mise a jour" onclick="verif();" style="height: 40px;border-radius: 0px;border: 0px;font-size: larger;" />
					</div>
				</form>
			</div>
		</div>
		<br><br><br><br><br><br>
	</section>
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

</body>
</html>