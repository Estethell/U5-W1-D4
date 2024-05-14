<?php 

include_once __DIR__ . "/MaterialeBibliotecario.php";

class DvD extends MaterialeBibliotecario {

    public $regista;
    public static $contaDvd;
    
    function __construct($regista, $titolo, $annoPubblicazione) {
        $this->regista = $regista;
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;
    }
    
    
    public function contaDvd() {
        self::$contaDvd++;
    
    }
    
    
    
    }