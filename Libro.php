<?php 

include_once __DIR__ . "/MaterialeBibliotecario.php";

class Libro extends MaterialeBibliotecario {

public $autore;

function __construct($autore, $titolo, $annoPubblicazione) {
    $this->autore = $autore;
    $this->titolo = $titolo;
    $this->annoPubblicazione = $annoPubblicazione;
}


public function contaLibri() {
parent::$contatoreMateriali++;

}



}