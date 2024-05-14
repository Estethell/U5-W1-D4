<?php 

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Libro extends MaterialeBibliotecario {

public $autore;
static protected $contatoreMateriali =0;


function __construct($autore, $titolo, $annoPubblicazione) {
    $this->autore = $autore;
    // $this->titolo = $titolo;
    // $this->annoPubblicazione = $annoPubblicazione;
    parent::__construct($titolo, $annoPubblicazione);
    self::$contatoreMateriali++;
}


static public function contaLibri() {
    return self::$contatoreMateriali;

}



}