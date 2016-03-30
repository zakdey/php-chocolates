<?php
namespace Prodotti\Service;

class ProdottiService {

    private $datiProdotti;

    public function __construct(array $datiProdotti) {
        $this->datiProdotti = $datiProdotti;
    }

    public function getListaProdotti() {
        return $this->datiProdotti;
    }

}
