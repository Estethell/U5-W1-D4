<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";
include_once __DIR__ . "/Libro.php";
include_once __DIR__ . "/Dvd.php";

$newBook = new Libro("Monaco", "Ritratto", "1523");
$newDvd = new Dvd("Tito", "Sono io", "2015");

echo $newBook->autore;
echo $newBook->titolo;
echo $newBook->annoPubblicazione;

echo $newBook->contaLibri();
echo $newDvd->contaDvd();

echo MaterialeBibliotecario::$contatoreMateriali;