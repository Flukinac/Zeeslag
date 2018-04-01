

function newuser(){

    var gebruiker = {};
    gebruiker.naam = $("#username").val();
    gebruiker.email = $("#email").val();
    gebruiker.wachtwoord = $("#pwd").val();
    gebruiker.rechten = $("#rechten").val();
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
    rekening.rekeningNummer = $("#rekeningnr").val();
    rekening.saldo = $("#saldo").val();
    rekening.pincode = $("#pincode").val();
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
    transactie.bedrag = $("#invoer").val();
    transactie.rekeningOntvanger = $("#invoer").val();
    transactie.rekeningVerzender = $("#invoer").val();
    transactie.opmerking = $("#invoer").val();
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
function hide(){
    $(".SignUpDiv").attr("hidden",true);  
}

function unhide(){
    $(".SignUpDiv").attr("hidden",false);  
}