<?php
namespace Ordini\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $ordiniService = $serviceLocator->getServiceLocator()->get('Ordini\Service\OrdiniService');
        $prodottiService = $serviceLocator->getServiceLocator()->get('Prodotti\Service\ProdottiService');
        $ordineForm = $serviceLocator->getServiceLocator()->get('Ordini\Form\OrdineForm');

        return new IndexController($ordiniService, $prodottiService, $ordineForm);

    }


}
