<?php

namespace Ordini\Form;

use Zend\Form\Form;

class OrdineForm extends Form
{
    /*public function __construct(array $listaCategorie)
    {
        parent::__construct('prodotto');
        $this->setAttribute('method', 'post');

        $this->add([
            'name'       => 'codice',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Codice',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'codice',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'nome',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Nome',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'nome',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'descrizione',
            'type'       => 'Zend\Form\Element\Textarea',
            'options' => array(
                 'label' => 'Descrizione',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'descrizione',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'ingredienti',
            'type'       => 'Zend\Form\Element\Textarea',
            'options' => array(
                 'label' => 'Ingredienti',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'ingredienti',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'prezzo',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Prezzo',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'prezzo',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'categoria',
            'type'       => 'Zend\Form\Element\Select',
            'options' => array(
                 'label' => 'Categoria',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
                 'value_options' => $listaCategorie,
            ),
            'attributes' => [
                'id'       => 'categoria',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'immagine',
            'type'       => 'Zend\Form\Element\File',
            'options' => array(
                 'label' => 'Immagine',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'immagine',
                'class'    => 'form-control'
            ]
        ]);

    }*/

}
