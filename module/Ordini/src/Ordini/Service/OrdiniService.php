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

    public function getOrdine($codice) {
        return $this->ordiniRepository->findOneByCodice($codice);
    }

    public function getListaOrdini() {
        return $this->ordiniRepository->findAll();
    }

    public function getListaCategorie() {
        return $this->categorieRepository->findAll();
    }

    public function getArrayCategorie() {
        $categorie = [];
        foreach($this->getListaCategorie() as $categoria) {
            $categorie[$categoria->getId()] = $categoria->getNome();
        }

        return $categorie;
    }

    public function creaNuovoOrdine(array $dati) {
        $ordine = new Ordine(
            $dati['codice'],
            $dati['nome'],
            $dati['descrizione'],
            $dati['ingredienti'],
            $dati['prezzo']
        );

        $this->entityManager->persist($ordine);
        $this->entityManager->flush();

        return $ordine;
    }

    public function elimina(Ordine $ordine) {
        $this->entityManager->remove($ordine);
        $this->entityManager->flush();
    }

}
