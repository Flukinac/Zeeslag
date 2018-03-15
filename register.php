<?php
$servername = "localhost";
$username = "root";
$password = "";      
$db = "zeeslag";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

$sqlRegisterBoat ="UPDATE `coordinaten` SET `a`=1,`b`=1,`c`=1 WHERE `id`=1";
$conn->query($sqlRegisterBoat); 

echo "boot geregistreert";