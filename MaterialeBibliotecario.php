<?php

include_once __DIR__ . "/Prestito.php";


abstract class MaterialeBibliotecario implements Prestito {

static protected $contatoreMateriali = 0;
public $titolo;
public $annoPubblicazione;

function __construct($titolo, $annoPubblicazione) 
{
    $this->titolo = $titolo;
    $this->annoPubblicazione = $annoPubblicazione;
    self::$contatoreMateriali++;
  
}


public function presta() {
if(self::$contatoreMateriali > 0) {
    self::$contatoreMateriali -1;
    static::$contatoreMateriali--;
}
}

public function restituisci() {
self::$contatoreMateriali++;
static::$contatoreMateriali++;

}

static public function contaMateriali() {
    return self::$contatoreMateriali;
}

}