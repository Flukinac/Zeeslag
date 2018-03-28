<?php
    include "credentials/credentials.php";
    include "classes.php";

$gebruiker = json_decode($_POST['gebruiker']);

$sqlNewUser = "INSERT INTO `rsa_gebruikers`(`naam`, `email`, `wachtwoord`) VALUES ('$gebruiker->naam','$gebruiker->email','$gebruiker->wachtwoord')";

$conn->query($sqlNewUser);