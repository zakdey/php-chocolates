<?php

namespace Prodotti\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function prodottoAction()
    {
        return new ViewModel([
            'codice' => $this->params()->fromRoute('codice')
        ]);
    }
}
