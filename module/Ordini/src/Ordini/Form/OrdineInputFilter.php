<?php

namespace Ordini\Form;

use Zend\InputFilter\InputFilter;

class OrdineInputFilter extends InputFilter
{

    public function __construct()
    {

        $this->add([
            'name' => 'nome_utente',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'cognome_utente',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'email_utente',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'indirizzo_utente',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        /*$this->add([
            'name' => 'prezzo',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                ['name' => 'Zend\I18n\Validator\IsFloat']
            ]
        ]);*/

        /*$this->add([
            'name' => 'immagine',
            'required' => "false",
            'validators' => [
                new \Zend\Validator\File\Extension(array('jpg'))
            ]
        ]);*/

    }

}
