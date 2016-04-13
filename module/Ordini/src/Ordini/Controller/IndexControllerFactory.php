<?php
namespace Ordini\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $ordiniService = $serviceLocator->getServiceLocator()->get('Ordini\Service\OrdiniService');

        return new IndexController($ordiniService);

    }


}
