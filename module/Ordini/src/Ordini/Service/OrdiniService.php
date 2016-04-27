<?php
namespace Ordini\Service;

use Ordini\Entity\Ordine;

class OrdiniService {

    private $entityManager;
    private $ordiniRepository;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
        $this->ordiniRepository = $entityManager->getRepository('Ordini\Entity\Ordine');
    }

    public function getOrdine($id) {
        return $this->ordiniRepository->findOneById($id);
    }

    public function getListaOrdini() {
        return $this->ordiniRepository->findAll();
    }


    public function creaNuovoOrdine(array $dati) {
        $ordine = new Ordine(
            $dati['id'],
            $dati['codice_prodotto'],
            $dati['totale'],
            $dati['nome_utente'],
            $dati['cognome_utente'],
            $dati['email_utente'],
            $dati['indirizzo_utente']

        );

        $this->entityManager->persist($ordine);
        $this->entityManager->flush();

        return $ordine;
    }


}
