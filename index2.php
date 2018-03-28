<?php
//    include "credentials.php";
  
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="functions.js"></script>
    </head>
    <body>
        <h1>RSA Bank</h1>
        
        <h3>Maak gebruiker aan</h3>
        <input type=text id=username name=username placeholder=Gebruikersnaam>
        <input type=text id=email name=email placeholder=Email>
        <input type=password id=pwd name=pwd placeholder=Wachtwoord>
        <input type=button value="Maak gebruiker aan"onclick="newuser();">
        
        <hr>
        <hr>
        
        
        <h3>Maak rekening aan</h3>
        <input type=text id=rekeningnr name=rekeningnr placeholder=Rekeningnummer>
        <input type=text id=saldo name=saldo placeholder=Saldo>
        <input type=password id=pincode name=pincode placeholder=Pincode>
        <input type=button value="Maak rekening aan"onclick="newrekening();">
        
        <hr>
        
        
        <h3>Maak transactie</h3>
        <input type=text id=ontvanger name=ontvanger placeholder="Rekeningnummer ontvanger">
        <input type=text id=verzender name=verzender placeholder="Rekeningnummer verzender">
        <input type=text id=bedrag name=bedrag placeholder=Bedrag>
        <input type=button value="Maak gebruiker aan"onclick="newtransactie();">
        
        
        
        
        
        
        
    </body>
</html>