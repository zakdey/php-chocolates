<?php

function inizializzaListaProdotti() {
  // lettura file esterno
  $listaProdotti = file_get_contents('data/prodotti.json');

  // conversione in array
  return json_decode($listaProdotti, true);
}
