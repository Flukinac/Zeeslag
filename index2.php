<?php
    include "credentials.php";
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
        <link rel="stylesheet" type="text/css" href="cssFrontPage.css">
    </head>
    <body class="body">
        <div class="titelDiv"><h1 class="titel">RSA Bank</h1></div>
        <div class="SignUp">
            <span class="aanmeldTitel"><h3>Maak gebruiker aan</h3></span>
            <input class="signUpText" size=30  type=text id=username name=username placeholder=Gebruikersnaam><br>
            <input class="signUpText" size=30 type=text id=email name=email placeholder=Email><br>
            <input class="signUpText" size=31  type=password id=pwd name=pwd placeholder=Wachtwoord><br>
            <input class="signUpText" size=30 type=text id=rechten name=rechten placeholder=Rechten><br>
            <input class="signUpText" type=button value="Maak gebruiker aan"onclick="newuser();"><br>
        </div>
       
        
        <div class="maakRekeningDiv">
            <span class="aanmeldTitel"><h3>Maak rekening aan</h3></span><br>
            <input type=text size=30 id=rekeningnr name=rekeningnr placeholder=Rekeningnummer><br>
            <input type=text size=30 id=saldo name=saldo placeholder=Saldo><br>
            <input type=password size=31 id=pincode name=pincode placeholder=Pincode><br>
            <input type=button value="Maak rekening aan"onclick="newrekening();"><br>
        </div>
        
        
        <div class="transactieDiv">
        <h3>Maak transactie</h3>
        <input type=text size=30 id=ontvanger name=ontvanger placeholder="Rekeningnummer ontvanger"><br>
        <input type=text size=30 id=verzender name=verzender placeholder="Rekeningnummer verzender"><br>
        <input type=text size=30 id=bedrag name=bedrag placeholder=Bedrag><br>
        <input type=text size=30 id=opmerking name=opmerking placeholder=Opmerking><br>
        <input type=button value="Maak transactie aan"onclick="newtransactie();"><br>
        </div>
        
        
        
        
        
        
    </body>
</html>