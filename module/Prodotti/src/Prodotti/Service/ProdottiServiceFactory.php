<?php
namespace Prodotti\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProdottiServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $datiProdottiJson = file_get_contents(__DIR__ . '/../../../../../data/prodotti/prodotti.json');
        $datiProdottiArray = json_decode($datiProdottiJson, true);

        return new ProdottiService($datiProdottiArray);

    }


}
