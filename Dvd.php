<?php 

include_once __DIR__ . "/MaterialeBibliotecario.php";

class DvD extends MaterialeBibliotecario {

    public $regista;

    static protected $contatoreMateriali =0;
    
    function __construct($regista, $titolo, $annoPubblicazione) {
        $this->regista = $regista;
        // $this->titolo = $titolo;
        // $this->annoPubblicazione = $annoPubblicazione;
        parent::__construct($titolo, $annoPubblicazione);
        self::$contatoreMateriali++;
    }
    
    
    static public function contaDvd() {
    return self::$contatoreMateriali;
    
    }
    
   }