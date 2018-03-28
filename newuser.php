<?php
    include "credentials/credentials.php";
    include "classes.php";


$gebruiker = json_decode($_POST['gebruiker']);
echo $gebruiker->naam;


