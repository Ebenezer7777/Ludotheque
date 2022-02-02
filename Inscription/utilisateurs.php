<?php
include 'dbconnection.php';
$request = $connect->prepare("SELECT * FROM member WHERE ID_Member=?");
$request->execute(array(htmlspecialchars($_GET['ID_Member'])));
$data = $request->fetch();
echo "Vous etes " . $data['Name'] . " " . $data['FirstName'] . "<br>";
echo "Vous etes né en " . $data['Email'] . "<br>";
echo "Votre mot de passe est : " . $data['motdepasse'] . "<br>";
echo "Votre photo : <br>" . $data['img'] . "<br>";
echo "Votre Adresse : <br>" . $data['Adress'] . "<br>";
echo "<a href='inscription.php?id=" . $data['ID_Member'] . "'>Modifier mes données</a>";
?>