<?php
	$user=$_GET['user'];
	$pass=$_GET['pass'];
	$query="SELECT COUNT(*) FROM Utenti WHERE UTE_Mail='". $user ."' AND UTE_Password='".$pass."';";
	//echo $query;
	$host="10.1.101.40";
	$mysqli = mysqli_connect($host,"Pippo","boobslean","eCommerce") or die ("errore di connessione");
	$result = mysqli_query($mysqli,$query) or die("errore query");
	//var_dump($result);
	$row = mysqli_num_rows($result);
	echo $row;
	mysqli_close($mysqli);
?>
