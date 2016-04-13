<?php
namespace Prodotti\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AdminControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $prodottiService = $serviceLocator->getServiceLocator()->get('Prodotti\Service\ProdottiService');
        $prodottoForm = $serviceLocator->getServiceLocator()->get('Prodotti\Form\ProdottoForm');

        return new AdminController($prodottiService, $prodottoForm);

    }


}
