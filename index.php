=
<html>
    <head>
        <?php 
            include 'geert.php';
        ?>
        <style>
            
        </style>
        <script>
            function search(co){    // zoekt of geklikte coordinaat een boot heeft
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Typical action to be performed when the document is ready:
                    document.getElementById("searchResult").innerHTML = xhttp.responseText;
                }
                };
                xhttp.open("GET", "ajax.php?jojo="+co.value, true);
                xhttp.send();
            }
            function registerBoat(){                                    //registreet een boot en zet het meer
                var bn = document.getElementById("name").value;         //boot naam
                var bs = document.getElementById("spaces").value;       //boot groote
                var bc = document.getElementById("place").value;    //boot coordinaten
                
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Typical action to be performed when the document is ready:
                    document.getElementById("searchResult").innerHTML = xhttp.responseText;
                }
                };
                xhttp.open("GET", "register.php?name="+bn+"&space="+bs+"&coor="+bc, true);
                xhttp.send();
            }
        </script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $speelZee = [
                [0,0,0,0,0,0,0,0,0,0],
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
        <input type="text" id="name" placeholder="name"><br>
        <input type="number" id="spaces" placeholder="spaces"><br>
        <input type="text" id="place" placeholder="vul hier je coordinaten in"><br>
        <input type="button" value="register" onclick="registerBoat()">
    </body>  
</html>