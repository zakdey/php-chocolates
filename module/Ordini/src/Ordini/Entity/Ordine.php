<?php

namespace Ordini\Entity;

use Doctrine\ORM\Mapping as ORM;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

/**
 * Ordini
 *
 * @ORM\Table(name="ordini")
 * @ORM\Entity(repositoryClass="Ordini\Entity\Repository\OrdiniRepository")
 */
class Ordine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codice_prodotto", type="string", nullable=false)
     */
    private $codice_prodotto;

    /**
     * @var string
     *
     * @ORM\Column(name="totale", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $totale;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_utente", type="text", nullable=true)
     */
    private $nome_utente;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome_utente", type="text", nullable=true)
     */
    private $cognome_utente;

    /**
     * @var string
     *
     * @ORM\Column(name="email_utente", type="text", nullable=true)
     */
    private $email_utente;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo_utente", type="text", nullable=true)
     */
    private $indirizzo_utente;


    public function __construct($id, $ordine, $totale, $nome_utente, $cognome_utente, $email_utente, $indirizzo_utente) {
        $this->id = $id;
        $this->ordine = $ordine;
        $this->totale = $totale;
        $this->nome_utente = $nome_utente;
        $this->cognome_utente = $cognome_utente;
        $this->email_utente = $email_utente;
        $this->indirizzo_utente = $indirizzo_utente;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codice_prodotto
     *
     * @param string $codice_prodotto
     *
     * @return Prodotto
     */
    public function setCodiceProdotto($codice_prodotto)
    {
        $this->codice_prodotto = $codice_prodotto;

        return $this;
    }

    /**
     * Get codice_prodotto
     *
     * @return string
     */
    public function getCodiceProdotto()
    {
        return $this->codice_prodotto;
    }

    /**
     * Set totale
     *
     * @param string $totale
     *
     * @return Ordine
     */
    public function setTotale($totale)
    {
        $this->totale = $totale;

        return $this;
    }

    /**
     * Get totale
     *
     * @return string
     */
    public function getTotale()
    {
        return $this->totale;
    }

    /**
     * Set nomeUtente
     *
     * @param string $nomeUtente
     *
     * @return Ordine
     */
    public function setNomeUtente($nomeUtente)
    {
        $this->nome_utente = $nomeUtente;

        return $this;
    }

    /**
     * Get nomeUtente
     *
     * @return string
     */
    public function getNomeUtente()
    {
        return $this->nome_utente;
    }

    /**
     * Set cognomeUtente
     *
     * @param string $cognomeUtente
     *
     * @return Ordine
     */
    public function setCognomeUtente($cognomeUtente)
    {
        $this->cognome_utente = $cognomeUtente;

        return $this;
    }

    /**
     * Get cognomeUtente
     *
     * @return string
     */
    public function getCognomeUtente()
    {
        return $this->cognome_utente;
    }

    /**
     * Set emailUtente
     *
     * @param string $emailUtente
     *
     * @return Ordine
     */
    public function setEmailUtente( $emailUtente)
    {
        $this->email_utente = $emailUtente;

        return $this;
    }

    /**
     * Get emailUtente
     *
     * @return \email
     */
    public function getEmailUtente()
    {
        return $this->email_utente;
    }

    /**
     * Set indirizzoUtente
     *
     * @param string $indirizzoUtente
     *
     * @return Ordine
     */
    public function setIndirizzoUtente($indirizzoUtente)
    {
        $this->indirizzo_utente = $indirizzoUtente;

        return $this;
    }

    /**
     * Get indirizzoUtente
     *
     * @return string
     */
    public function getIndirizzoUtente()
    {
        return $this->indirizzo_utente;
    }

    /**
     * Set ordine
     *
     * @param \Ordini\Entity\Ordine $ordine
     *
     * @return Ordine
     */
    public function setOrdine(\Ordini\Entity\Ordine $ordine = null)
    {
        $this->ordine = $ordine;

        return $this;
    }

    /**
     * Get ordine
     *
     * @return \Ordini\Entity\Ordine
     */
    public function getOrdine()
    {
        return $this->ordine;
    }
}
