<?php
namespace Ordini\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AdminControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $ordiniService = $serviceLocator->getServiceLocator()->get('Ordini\Service\ProdottiService');
        //$prodottoForm = $serviceLocator->getServiceLocator()->get('Prodotti\Form\ProdottoForm');

      return new AdminController($ordiniService/*, $prodottoForm*/);

    }


}
