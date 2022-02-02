<?php	
	session_start();
	include 'dbconnection.php';
	$id=$_GET['delete'];
	

	
	$req=$connect->query("delete from games where ID_Game='$id'");

	echo '<meta http-equiv="refresh" content="2; url=\'delete.php\'">';
	echo "<script>alert ('La suppression est termine avec success');</script>";	
?>