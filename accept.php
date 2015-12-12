<?php
        $mail = $_GET['mail'];
        $cod = $_GET['cod'];
        $query = "UPDATE Utenti SET UTE_Cod='0' WHERE UTE_Mail='".$mail."' AND UTE_Cod='".$cod."'";
        $mysqli = mysqli_connect("10.1.101.40","Pippo","boobslean","eCommerce");
        $result = mysqli_query($mysqli,$query) or die("0");
        echo $result;
?>
