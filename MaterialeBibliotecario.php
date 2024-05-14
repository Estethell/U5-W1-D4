<?php

include_once __DIR__ . "/Prestito.php";


abstract class MaterialeBibliotecario implements Prestito {

static public $contatoreMateriali = 0;
public $titolo;
public $annoPubblicazione;

function __construct($titolo, $annoPubblicazione) 
{
    $this->titolo = $titolo;
    $this->annoPubblicazione = $annoPubblicazione;
    
}


public function presta() {
if(self::$contatoreMateriali > 0) {
    self::$contatoreMateriali -1;
}
}

public function restituisci() {
self::$contatoreMateriali++;

}

}