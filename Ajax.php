<?php


$speelZee = [
                [1,1,1,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0],
            ];


function shoot($speelZee, $cory, $corx){
$servername = "localhost";
$username = "root";
$password = "";      
$db = "zeeslag";
$cijferNaarLetter = ["a","b","c","d","e","f","g","h","i","j"];//dit systeem kan weg als de database tabel kolom geen letters maar nummers bevat

$conn = mysqli_connect($servername, $username, $password, $db);
$query = "SELECT `$cijferNaarLetter[$corx]` FROM `coordinaten` WHERE ID=$cory";
$result = $conn->query($query);
echo $cory.$corx;
$arrayData = mysqli_fetch_assoc ( $result );
$varVanArray = in_array(1,$arrayData);
print_r($arrayData);  

    if($varVanArray == 1){
        echo "BOEM";
    }else{
        echo "plons";
    }
}

if (isset($_GET['jojo'])){
    $corarray = str_split($_GET['jojo']);
    
   if(isset($corarray[1])){      //hier wordt de array overgezet in 2 vars voor de functie shoot. wanneer er in de bovenste rij van het speelveld wordt geclickt dan komt er in principe geen invulling in het array op positie [1] dus vandaar deze if statement. dat geeft een invulling van 01 02 03 ipv 1 2 3
       $cory = $corarray[0];
       $corx = $corarray[1];
   }else{
       $cory = '0';
       $corx = $corarray[0]; 
   }
    
    shoot($speelZee, $cory, $corx);
}

// if($speelZee[$cory][$corx] == 1){     om uit te lezen uit de array $speelzee
//        echo "BOEM";
//    }else{
//        echo "plons";
//    }
//}