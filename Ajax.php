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
    echo $speelZee[3][1]."<br>";
    echo $cory."<br>";
    echo $corx."<br>";
    if($speelZee[$cory][$corx] == 1){
        echo "BOEM";
//              "<style>
//                  #".$cor."{
//                  }
//               </style>";
    }else{
        echo "plons";
    }
}

if (isset($_GET['jojo'])){
    $corarray = str_split($_GET['jojo']);
    
    isset($corarray[1]) ? $cory = $corarray[1] : $cory = 0; //hier wordt de array overgezet in 2 vars voor de functie shoot. wanneer er in de bovenste rij van het speelveld wordt geclickt dan komt er in principe geen invulling in het array dus vandaar deze if statement
    $corx = $corarray[0];
    
    print_r($corarray);
    shoot($speelZee, $cory, $corx);
}

