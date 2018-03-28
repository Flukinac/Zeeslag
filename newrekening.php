<?php
    include "credentials/credentials.php";
    include "classes.php";
        
    
$rekening = json_decode($_POST['rekening']);
echo $rekening->saldo;

