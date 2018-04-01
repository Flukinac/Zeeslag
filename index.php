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
            <link rel="stylesheet" media="all" href="<?php echo rel_url('/stylesheets/style.css'); ?>" />
        <title></title>
    </head>
    <body>
        <div>
            <form id="login" method="POST">
                <input type="text" placeholder="gebruikersnaam">
                <input type="password" placeholder="wachtwoord">
                <input type="submit" id="submit" value="Inloggen">
            </form>
        </div>
        <div>
            <input type="signup" id="signup" value="Aanmelden">
        <?php
        $conn = createconnection();
        echo "heloo world";
        ?>
    </body>
</html>
