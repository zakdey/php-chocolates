<?php
namespace Ordini\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class OrdiniServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $entityManager = $serviceLocator->get('doctrine.entitymanager.orm_default');

        return new OrdiniService($entityManager);

    }


}
