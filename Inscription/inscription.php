<?php
session_start();
include './dbconnection.php';

//post value

if (isset($_POST['inscription'])) {
	$Name=@$_POST['Name'];
	$FirstName=@$_POST['FirstName'];
	$Email=@$_POST['Email'];
	$Adress=@$_POST['Adress'];
	$dir_name=dirname(__FILE__)."../images";
	$img=@$_FILES['img']['name'];
	$img_type=@$_FILES['img']['type'];
	$img_size=@$_FILES['img']['size'];
	$img_error=@$_FILES['img']['error'];
	$img_tmp=@$_FILES['img']['tmp_name'];
	$Mot_de_passe=@$_POST['Mot_De_Passe'];
	$Confirmation_Mot_de_passe=@$_POST['Confirmation_Mot_de_passe'];
	
	
	if (!empty($_POST['Name']) && !empty($_POST['FirstName']) && !empty($_POST['Email']) && !empty($_POST['Adress']) 
	&& !empty(($_FILES['img']['name'])) && !empty($_POST['Mot_De_Passe']) && !empty($_POST['Confirmation_Mot_de_passe'])) {
print_r($_POST);
		//move upload img
	move_uploaded_file($img_tmp,$dir_name.$img);

//insert pro
$request = $connect->prepare("INSERT INTO utilisateurs VALUES (NULL,?,?,?,?,?,?,?)");
$request->execute(array($_POST['Name'], $_POST['FirstName'], $_POST['Email'],$_POST['Adress'], $_FILES['img']['name'],
$_POST['Mot_De_Passe'],$_POST['Confirmation_Mot_de_passe']));



	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>LUDOTHEQUE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<table class="box1">
		<tr>
			<td>
			<img src="../images/gaming.jpg" style="height: 1200px;width:500px">
			</td>
			<td>
			<div class="box1">
				<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">LUDOTHEQUE</h1><br>
				<h1 style="text-align: center; font-size: 25px;">INSCRIPTION</h1><br>
				<form name="f" action="inscription.php"  method="POST" enctype="multipart/form-data">
					<div class="f">
					<p style="color: white;">Nom:</p>
					<input type="text" name="nom" placeholder="Nom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Prenom:</p>
					<input type="text" name="prenom" placeholder="Prenom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Email:</p>
					<input type="email" name="prenom" placeholder="email" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Photo:</p>
					<input type="file"  name="img" required="" style="height:40px;" /><br>
					<p style="color: white;">Adresse(exemple : 11 BD CAHRLES NICOLLE):</p>
					<input type="text" name="adress" placeholder="Adresse" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Mot de Passe:</p>
					<input type="password" name="motdepasse" placeholder="Mot de Passe" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Confirmation Mot de Passe:</p>
					<input type="password" name="motdepasse" placeholder="Confirmation Mot de Passe" required="" style="height:40px;" /><br><br>
					
					<input type="submit" value=Valider name="inscription">
					 <a href="index.php">Retour</a> <br><br>
					</div>
				</form>
			</div>
		  
	
			</td>
		</tr>
	</table>

</body>

</html>