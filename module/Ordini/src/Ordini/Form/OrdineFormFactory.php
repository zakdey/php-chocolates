<?php

namespace Ordini\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class OrdineFormFactory implements FactoryInterface
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
        $ordiniService = $serviceLocator->get('Ordini\Service\OrdiniService');

        $inputFilter = new OrdineInputFilter();
        $form = new OrdineForm();

        $form->setInputFilter($inputFilter);

        return $form;
    }
}
