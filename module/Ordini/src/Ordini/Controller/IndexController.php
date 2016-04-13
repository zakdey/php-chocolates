<?php

namespace Ordini\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Ordini\Service\OrdiniService;

class IndexController extends AbstractActionController
{
    private $ordiniService;

    public function __construct(OrdiniService $ordiniService) {
        $this->ordiniService = $ordiniService;
    }

    public function indexAction()
    {
        return new ViewModel([
            'lista' => $this->ordiniService->getListaOrdini()
        ]);
    }

    /*public function ordineAction()
    {
        $prodotto = $this->prodottiService->getProdotto($this->params()->fromRoute('codice'));
        return new ViewModel([
            'prodotto' => $prodotto
        ]);
    }*/
}
