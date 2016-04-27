<?php

namespace Ordini\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Ordini\Service\OrdiniService;
use Prodotti\Service\ProdottiService;
use Ordini\Form\OrdineForm;

class IndexController extends AbstractActionController
{
    private $ordiniService;
    private $prodottiService;
    private $ordineForm;

    public function __construct(OrdiniService $ordiniService, ProdottiService $prodottiService, OrdineForm $ordineForm) {
        $this->ordiniService = $ordiniService;
        $this->prodottiService = $prodottiService;
        $this->ordineForm = $ordineForm;
    }

    public function indexAction()
    {
        return new ViewModel([
            'lista' => $this->ordiniService->getListaOrdini()
        ]);
    }

    public function ordineAction()
    {
        $ordine = $this->ordiniService->getOrdine($this->params()->fromRoute('id'));
        return new ViewModel([
            'id' => $id
        ]);
    }
    public function nuovoAction()
    {
        $codiceProdotto = $this->params()->fromRoute('codice_prodotto');
            $prodotto = $this->prodottiService->getProdotto($codiceProdotto);
            $arrayDatiProdotto = [
                          'codice_prodotto'=>$prodotto->getCodice(),
                          'totale'=>$prodotto->getPrezzo()
                        ];
        if ($this->getRequest()->isPost()) {
            $request = $this->getRequest();

            // merge dati che arrivano dalla form
            $postData = array_merge_recursive(
                $request->getPost()->toArray(),
                $arrayDatiProdotto
            );

            $this->ordineForm->setData($postData);

            if ($this->ordineForm->isValid()) {

                $ordine = $this->ordiniService->creaNuovoOrdine($postData);

                $this->redirect()->toRoute('ordini');

            }
        }

        return new ViewModel([
            'form' => $this->ordineForm
        ]);
    }
}
