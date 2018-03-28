function newuser(){
    var gebruiker = {}
    gebruiker.naam = document.getElementById("username").value;
    gebruiker.email = document.getElementById("email").value;
    gebruiker.password = document.getElementById("pwd").value;
    //alert("Nieuwe user aangemaakt");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function (){
        if(xml.readyState === 4 && xml.status === 200){
            console.log(this.responseText);
            console.log(xml);
        }
    var userdata = JSON.stringify(gebruiker);
    xml.open("POST", "newuser.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send("gebruiker="+userdata);
    };
}


function newrekening(){
    alert("Nieuwe rekening aangemaakt");
}


function newtransactie(){
    alert("Nieuwe transactie gemaakt");
}