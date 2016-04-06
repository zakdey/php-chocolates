<?php

namespace Prodotti\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Prodotti\Service\ProdottiService;

class IndexController extends AbstractActionController
{
    private $prodottiService;

    public function __construct(ProdottiService $prodottiService) {
        $this->prodottiService = $prodottiService;
    }

    public function indexAction()
    {
        return new ViewModel([
            'lista' => $this->prodottiService->getListaProdotti()
        ]);
    }

    public function prodottoAction()
    {
        $prodotto = $this->prodottiService->getProdotto($this->params()->fromRoute('codice'));
        return new ViewModel([
            'prodotto' => $prodotto
        ]);
    }
}
