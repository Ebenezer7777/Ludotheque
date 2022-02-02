<?php
	session_start();
	include 'dbconnection.php';
	$row=$connect->prepare("select * from booking ");
			$row->execute(array());
			$ros=$row->fetch();
$ID_Game=$ros['ID_Game'];
$req=$connect->query("delete from booking where ID_Game='$ID_Game'");
echo '<meta http-equiv="refresh" content="2; url=\'booking.php\'">';

echo "<script>alert ('La retour de jeu a ete effectue');</script>";

?>