<?php
session_start();
if (empty($_SESSION)) {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>LUDOTHEQUE</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<table class="box1" ">
			<tr>
				<td><img src="../images/gamer.jpeg" style="height: 800px;width:500px"></td>
				<td >	<div class="box">
				<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">LUDOTHEQUE</h1><br>
				<h1 style="text-align: center; font-size: 25px;">CONNEXION</h1><br>
				<form name="f" action="connect.php"  method="POST" enctype="multipart/form-data">
					<div class="f">
					<p style="color: white;">Email</p>
					<input type="text" name="nom" placeholder="Nom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Mot de Passe:</p>
					<input type="password" name="motdepasse" placeholder="Mot de Passe" required="" style="height:40px;" /><br><br>
					
					<a href="C:\wamp64\www\Ludo\acceuil.html"  ><input type="submit" value="Valider" name="submit"></a><br><br>
					<a  href="inscription.php">S'inscrire</a>
			</form>
		</div></td>
			</tr>
		</table>

	</body>

	</html>
<?php
} else {
?>
	<a href="deconnexion.php">Se déconnecter</a>
<?php
}
?>