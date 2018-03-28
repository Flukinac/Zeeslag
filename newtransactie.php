<?php
    include "credentials/credentials.php";
    include "classes.php";

$transactie = json_decode($_POST['transactie']);

$sqlNewTransactie = "INSERT INTO `rsa_transacties`(`bedrag`, `ontvanger`, `verzender`,`opmerking`) VALUES ('$transactie->bedrag','$transactie->rekeningOntvanger','$transactie->rekeningVerzender','$transactie->opmerking')";

$conn->query($sqlNewTransactie);

 echo $sqlNewTransactie;
