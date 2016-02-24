<?php
// inizializziamo le sessioni
session_start();

include 'libs/db.php';
include 'libs/carrello.php';

// includere i file con le classi gestiti da Composer
include 'vendor/autoload.php';

// usiamo il namespace corretto per la classe Carrello
use MvLabs\Chocosite\Model\Carrello;

// recuperiamo il prodotto da aggiungere al carrello
// lettura parametro da URL
$codiceProdotto = $_GET['codice'];

$prodotto = recuperaProdottoDaCodice($codiceProdotto);

//aggiungiProdottoCarrello($prodotto, 1);

// istanziare una classe carrello
$carrello = new Carrello();

// aggiungere prodotto al carrello
$carrello->aggiungiRigaCarrello($prodotto, 1);

// salvare il carrello in sessione
$_SESSION['carrello'] = $carrello;

// rimando a pagina carrello
header ('location: carrello.php');
