<?php 

include_once __DIR__ . "/MaterialeBibliotecario.php";

class DvD extends MaterialeBibliotecario {

    public $autore;
    
    function __construct($autore, $titolo, $annoPubblicazione) {
        $this->autore = $autore;
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;
    }
    
    
    public function contaDvd() {
    parent::restituisci();
    
    }
    
    
    
    }