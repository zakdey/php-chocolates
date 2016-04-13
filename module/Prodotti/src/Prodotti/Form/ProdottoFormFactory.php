<?php

namespace Prodotti\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProdottoFormFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return DriverLicenseForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $prodottiService = $serviceLocator->get('Prodotti\Service\ProdottiService');
        $listaCategorie = $prodottiService->getArrayCategorie();

        $inputFilter = new ProdottoInputFilter();
        $form = new ProdottoForm($listaCategorie);

        $form->setInputFilter($inputFilter);

        return $form;
    }
}
