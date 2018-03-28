<?php
    include "credentials/credentials.php";
    include "classes.php";

$transactie = json_decode($_POST['transactie']);

$sqlNewTransactie = "INSERT INTO `rsa_transacties`(`bedrag`, `ontvanger`, `verzender`) VALUES ('$transactie->bedrag','$transactie->rekeningOntvanger','$transactie->rekeningVerzender')";

$conn->query($sqlNewTransactie);

 echo $sqlNewTransactie;
