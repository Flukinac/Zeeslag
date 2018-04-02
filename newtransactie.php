<?php
    include "credentials/credentials.php";
    include "classes.php";

$transactie = json_decode($_POST['transactie']);

$sqlNewTransactie = "INSERT INTO `rsa_transacties`(`bedrag`, `ontvanger`, `verzender`,`opmerking`) VALUES ('$transactie->bedrag','$transactie->rekeningOntvanger','$transactie->rekeningVerzender','$transactie->opmerking')";
$sqlBijschrijving = "UPDATE `rsa_rekeningen` SET `saldo` = `saldo` + '$transactie->bedrag' WHERE `rekeningnummer` = '$transactie->rekeningOntvanger'";
$sqlAfschrijving = "UPDATE `rsa_rekeningen` SET `saldo` = `saldo` - '$transactie->bedrag' WHERE `rekeningnummer` = '$transactie->rekeningVerzender'";

$conn->query($sqlNewTransactie);
$conn->query($sqlBijschrijving);
$conn->query($sqlAfschrijving);

// echo $sqlNewTransactie;
