<?php

namespace Prodotti\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Prodotti\Service\ProdottiService;
use Prodotti\Form\ProdottoForm;

class AdminController extends AbstractActionController
{
    private $prodottiService;
    private $form;

    public function __construct(ProdottiService $prodottiService, ProdottoForm $prodottoForm) {
        $this->prodottiService = $prodottiService;
        $this->form = $prodottoForm;
    }

    public function indexAction()
    {
        return new ViewModel([
            'lista' => $this->prodottiService->getListaProdotti()
        ]);
    }

    public function nuovoAction()
    {
        if ($this->getRequest()->isPost()) {
            $postData = $this->getRequest()->getPost()->toArray();
            $this->form->setData($postData);

            if ($this->form->isValid()) {

                $this->prodottiService->creaNuovoProdotto($postData);

                $this->redirect()->toRoute('zfcadmin/prodotti');

            }
        }

        return new ViewModel([
            'form' => $this->form
        ]);
    }

    public function eliminaAction()
    {
        $prodotto = $this->prodottiService->getProdotto($this->params()->fromRoute('codice'));
        $this->prodottiService->elimina($prodotto);

        $this->redirect()->toRoute('zfcadmin/prodotti');
    }

}
