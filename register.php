<?php
      $mail = $_GET['mail'];
      $pass = $_GET['pass'];
      $nome = $_GET['nome'];
      $cognome = $_GET['cog'];
      $dataN = $_GET['dn'];
      $cod = rand(1,65535);
      $query="INSERT INTO Utenti(UTE_Mail,UTE_Password,UTE_Nome,UTE_Cognome,UTE_DataNascita) VALUES ('".$mail."','".$pass."','".$nome."','".$cognome."','".$dataN."');";
      $host="10.1.101.40";
      $mysqli = mysqli_connect($host,"Pippo","boobslean","eCommerce") or die ("errore di connessione");
      $result = mysqli_query($mysqli,$query) or die("0");
      echo $result;
      mysqli_close($mysqli);
      mail($mail,"Account Activation","Please click on the following link to activate your account: ");
?>
