<?php

$cor = $_GET['jojo'];

if($cor === '7'){
    echo "BOEM".
          "<style>
              #".$cor."{
              }
           </style>";
}else{
    echo "plons";
}
