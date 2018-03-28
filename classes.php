<?php
    include "credentials.php";
    
    class Bank {
        public $naam;
        public $rekening;
        public $totaalBedrag;
        
        function __construct($naam, $rekening, $totaalBedrag) {
            $this->naam = $naam;
            $this->totaalBedrag = $totaalBedrag;
            $this->rekening = $rekening;
        }
        
        function saldoBijhouden(){
            
        }
        function geldBijmaken(){
            
        }   
    }
    
    class Gebruiker {
        public $naam;
        public $email;
        public $wachtwoord;
        
        function __construct($naam, $email, $wachtwoord) {
            $this->naam=$naam;
            $this->email=$email;
            $this->wachtwoord=$wachtwoord;
        }
        function accountMaken(){
            
        }
        function inloggen(){
            
        }
        function rekeningOpenen(){
            
        }
        function rekeningSluiten(){
            
        }
        function geldStorten(){
            
        }
    }
    
    class Rekening {
        public $saldo;
        public $rekeningNummer;
        public $pincode;
        
        function __construct($rekeningNummer, $pincode, $saldo) {
            $this->rekeningNummer = $rekeningNummer;
            $this->pincode = $pincode;   
            $this->saldo = $saldo;
        }
    }
    
    class Transactie {
        public $bedrag;
        public $rekeningOntvanger;
        public $rekeningVerzender;
        
        function __construct($bedrag, $rekeningOntvanger, $rekeningVerzender) {
            $this->bedrag = $bedrag;
            $this->rekeningOntvanger = $rekeningOntvanger;
            $this->rekeningVerzender = $rekeningVerzender;
        }
        
        function overSchrijven(){
            
        }
    }