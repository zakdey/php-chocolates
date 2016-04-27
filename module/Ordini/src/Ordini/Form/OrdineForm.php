<?php

namespace Ordini\Form;

use Zend\Form\Form;

class OrdineForm extends Form
{
    public function __construct()
    {
        parent::__construct('nome_utente');
        $this->setAttribute('method', 'post');


        $this->add([
            'name'       => 'nome_utente',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Nome',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'nome_utente',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'cognome_utente',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Cognome',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'cognome_utente',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'email_utente',
            'type'       => 'Zend\Form\Element\Email',
            'options' => array(
                 'label' => 'Email',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'email_utente',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'indirizzo_utente',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Indirizzo',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'indirizzo_utente',
                'class'    => 'form-control'
            ]
        ]);        

    }

}
