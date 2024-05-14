<?php

include_once __DIR__ . "/MaterialeBibliotecario.php";
include_once __DIR__ . "/Libro.php";
include_once __DIR__ . "/Dvd.php";

// $newBook = new Libro("Monaco", "Ritratto", "1523");
// $newDvd = new Dvd("Tito", "Sono io", "2015");

// echo $newBook->autore;
// echo $newBook->titolo;
// echo $newBook->annoPubblicazione;

// echo $newBook->contaLibri();
// echo $newDvd->contaDvd();

// echo Libro::$contaLibri;
// echo Dvd::$contaDvd;

$book1 = new Libro("Alan Poe", "Piccoli principi crescono", "1820");
$book2 = new Libro("Niksmlasplò", "KKKKK", "1840");
$book3 = new Libro("Nashnf", "LHFGDFH", "1520");
$DvD1 = new DvD("K;smsdjkd", "LNMBHG", "1120");
$DvD2 = new DvD("Lsfnmfk", "LBGDGHJJ", "123");
echo MaterialeBibliotecario::contaMateriali();

$book1->presta();
$DvD2->presta();
$book1->restituisci();
echo Libro::contaLibri(); 
echo Dvd::contaDvd();  