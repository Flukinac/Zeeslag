
function newuser(){

    var gebruiker = {};
    gebruiker.naam = document.getElementById("username").value;
    gebruiker.email = document.getElementById("email").value;
    gebruiker.wachtwoord = document.getElementById("pwd").value;
    //alert("Nieuwe user aangemaakt");

    var xml = new XMLHttpRequest();
     
    xml.onreadystatechange = function (){
        if(xml.readyState === 4 && xml.status === 200){
           
            console.log(this.responseText);
        }
    };

    var userdata = JSON.stringify(gebruiker);
    xml.open("POST", "newuser.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send("gebruiker="+userdata);
}



function newrekening(){
    var rekening = {};
    rekening.rekeningNummer = document.getElementById("rekeningnr").value;
    rekening.saldo = document.getElementById("saldo").value;
    rekening.pincode = document.getElementById("pincode").value;
    //alert("Nieuwe user aangemaakt");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function (){
        if(xml.readyState === 4 && xml.status === 200){
            console.log(this.responseText);
        }
    };
    var rekeningdata = JSON.stringify(rekening);
    xml.open("POST", "newrekening.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send("rekening="+rekeningdata);
}


function newtransactie(){
        var transactie = {};
    transactie.bedrag = document.getElementById("bedrag").value;
    transactie.rekeningOntvanger = document.getElementById("ontvanger").value;
    transactie.rekeningVerzender = document.getElementById("verzender").value;
    //alert("Nieuwe user aangemaakt");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function (){
        if(xml.readyState === 4 && xml.status === 200){
            console.log(this.responseText);
        }
    };
    var transactiedata = JSON.stringify(transactie);
    xml.open("POST", "newtransactie.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send("transactie="+transactiedata);
}
