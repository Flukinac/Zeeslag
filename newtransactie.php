<?php
    include "credentials/credentials.php";
    include "classes.php";
    
    
$transactie = json_decode($_POST['transactie']);
echo $transactie->bedrag;