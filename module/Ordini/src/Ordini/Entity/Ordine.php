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
     * @ORM\Column(name="nome_utente", type="string", nullable=false)
     */
    private $nome_utente;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome_utente", type="string", nullable=false)
     */
    private $cognome_utente;

    /**
     * @var string
     *
     * @ORM\Column(name="email_utente", type="string", nullable=false)
     */
    private $email_utente;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo_utente", type="string", nullable=false)
     */
    private $indirizzo_utente;


    public function __construct($id, $codice_prodotto, $totale, $nome_utente, $cognome_utente, $email_utente, $indirizzo_utente) {
        $this->id = $id;
        $this->codice_prodotto = $codice_prodotto;
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
     * @return Ordine
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
     * @param decimal $totale
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
     * @return decimal
     */
    public function getTotale()
    {
        return $this->totale;
    }

    /**
     * Set nome_utente
     *
     * @param string $nome_utente
     *
     * @return Ordine
     */
    public function setNomeUtente($nome_utente)
    {
        $this->nome_utente = $nome_utente;

        return $this;
    }

    /**
     * Get nome_utente
     *
     * @return string
     */
    public function getNomeUtente()
    {
        return $this->nome_utente;
    }
    /**
     * Set cognome_utente
     *
     * @param string $cognome_utente
     *
     * @return Ordine
     */
    public function setCognomeUtente($cognome_utente)
    {
        $this->cognome_utente = $cognome_utente;

        return $this;
    }

    /**
     * Get cognome_utente
     *
     * @return string
     */
    public function getCognomeUtente()
    {
        return $this->cognome_utente;
    }

    /**
     * Set email_utente
     *
     * @param string $email_utente
     *
     * @return Ordine
     */
    public function setEmailUtente($email_utente)
    {
        $this->email_utente = $email_utente;

        return $this;
    }
    /**
     * Get email_utente
     *
     * @return string
     */
    public function getEmailUtente()
    {
        return $this->email_utente;
    }

    /**
     * Set indirizzo_utente
     *
     * @param string $indirizzo_utente
     *
     * @return Ordine
     */
    public function setIndirizzoUtente($indirizzo_utente)
    {
        $this->indirizzo_utente = $indirizzo_utente;

        return $this;
    }
    /**
     * Get indirizzo_utente
     *
     * @return string
     */
    public function getIndirizzoUtente()
    {
        return $this->indirizzo_utente;
    }

}
