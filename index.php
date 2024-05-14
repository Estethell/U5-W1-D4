<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";
include_once __DIR__ . "/Libro.php";
include_once __DIR__ . "/Dvd.php";

$newBook = new Libro("Ritratto", "1523");
$newDvd = new Dvd("Sono io", "2015");

echo $newBook->contaLibri();
echo $newDvd->contaDvd();

echo MaterialeBibliotecario::$contatoreMateriali;