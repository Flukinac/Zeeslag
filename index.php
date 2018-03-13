<html>
    <body>
       <?php
            echo "<table>";
                for($y=0;$y<11;$y++){ 
                    echo "<tr border='2px' bordercolor='yellow'>";
                            for($x=0;$x<11;$x++){
                                if($x!=0&&$y!=10){
                                    echo "<td bgcolor=#2B83A1 bordercolor='yellow' border='2px' style='height: 50px; width: 50px; text-align:center;'>tex</td>";
                                }else{
                                    echo "<td style='height: 50px; width: 50px; text-align:center; bgcolor='grey' bordercolor='black' border='1px''>";
                                    if($y==10){
                                        echo $x;
                                    }else{
                                        echo $y;}
                                    echo "</td>";
                                }
                            }
                    echo "</tr>";
                }
            echo "</table>";
        ?>
    </body>  
</html>

