<?php
session_start();
include 'dbconnection.php';
if (isset($_POST['submit']) && ($_POST['Email'] == $Email && $_POST['Mot_De_Passe'] == $Mot_De_Passe)) {
	$a = 2;
	$row = $connect->prepare("select * from member where ID_Member='$a'");
	$row->execute(array());
	$ros = $row->fetch();
	
	$Email = $ros['Email'];
	$Mot_De_Passe = $ros['Mot_De_Passe'];
	header("Location:http://localhost/Ludo-main/admin/admin_index.php");
	if (!empty($_POST['Email']) && !empty($_POST['Mot_De_Passe'])) {
		$request = $connect->prepare("SELECT * FROM member WHERE Email=? AND Mot_De_Passe=?");
		$request->execute(array($_POST['Email'], $_POST['Mot_De_Passe']));
		$nbr = $request->rowCount();
		

		if ($nbr > 0) {
			$data = $request->fetch();
			$_SESSION['Email'] = $data['Email'];
			$_SESSION['Mot_De_Passe'] = $data['Mot_De_Passe'];
			$_SESSION['ID_Member'] = $data['ID_Member'];
			header("Location:http://localhost/Ludo-main/accueil.html");
		} else {
			header("Location:index.php");
		}
	}
}
