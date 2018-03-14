<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <?php
            echo "<table>";
                for($y=0;$y<10;$y++){ 
                    echo "<tr>";
                            for($x=0;$x<10;$x++){
                                    $cor = $y*10+$x;                        //maakt unieke id codes aan met de x en y as
                                    echo "<td id=".$cor.">".$cor."</td>";   //creert de vakjes en voert de id waarde per vakje in
                            }
                    echo "</tr>";
                }
            echo "</table>";
        ?>
    </body>  
</html>

