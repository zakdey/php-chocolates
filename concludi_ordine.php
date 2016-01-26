<?php
// inizializziamo le sessioni
session_start();

include 'libs/libreria.php';
include 'libs/carrello.php';

// recuperiamo i dati di carrello e utente e li salviamo in un file json
$prodotti = getProdottiCarrello();
$utente = $_SESSION['utente'];

salvaOrdine($prodotti, $utente);

// rimando a pagina carrello
header ('location: grazie.php');
