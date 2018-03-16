=
<html>
    <head>
        <?php 
            include 'geert.php';
        ?>
        <style>
            
        </style>
        <script>
            function search(co){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Typical action to be performed when the document is ready:
                    document.getElementById("searchResult").innerHTML = xhttp.responseText;
                }
                };
                xhttp.open("GET", "Ajax.php?jojo="+co.value, true);
                xhttp.send();
            }
            function registerBoat(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Typical action to be performed when the document is ready:
                    document.getElementById("searchResult").innerHTML = xhttp.responseText;
                }
                };
                xhttp.open("GET", "register.php", true);
                xhttp.send();
            }
           
        </script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            
            

            echo "<table>";
                for($y=0;$y<10;$y++){ 
                    echo "<tr>";
                            for($x=0;$x<10;$x++){
                                    $cor = $y*10+$x;                        //maakt unieke id codes aan met de x en y as
                                    echo "<td id=".$cor."><input type=button value=".$cor." onclick='search(this)'></td>";   //creert de vakjes en voert de id waarde per vakje in
                            }
                    echo "</tr>";
                }
            echo "</table>";
            
            
        ?>
        <div id=searchResult>Result</div>
        <input type="button" value="register" onclick="registerBoat()">
        
    </body>  
</html>



