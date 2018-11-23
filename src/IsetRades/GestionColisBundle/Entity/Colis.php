<?php

namespace IsetRades\GestionColisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colis
 *
 * @ORM\Table(name="colis")
 * @ORM\Entity(repositoryClass="IsetRades\GestionColisBundle\Repository\ColisRepository")
 */
class Colis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * 
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix_payer", type="float")
     */
    private $prixPayer;

    /**
     * @var int
     *
     * @ORM\Column(name="Poids", type="integer")
     */
    private $poids;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_creation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_arrivee", type="date")
     */
    private $dateArrivee;


    /**
     * Get id
     *
     * @return int
     */
    public function getCodeColis()
    {
        return $this->id;
    }

    /**
     * Set prixPayer
     *
     * @param float $prixPayer
     *
     * @return Colis
     */
    public function setCodeColis($code) {
        $this->id=$code;
    }
    
    /*function __construct($id, $prixPayer, $poids, $etat) {
        $this->id = $id;
        $this->prixPayer = $prixPayer;
        $this->poids = $poids;
       // $this->dateCreation = $dateCreation;
        $this->etat = $etat;
       // $this->dateArrivee = $dateArrivee;
    }*/
 function __construct() {
     
 }

     public function setPrixPayer($prixPayer)
    {
        $this->prixPayer = $prixPayer;

        return $this;
    }

    /**
     * Get prixPayer
     *
     * @return float
     */
    public function getPrixPayer()
    {
        return $this->prixPayer;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     *
     * @return Colis
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Colis
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Colis
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set dateArrivee
     *
     * @param \DateTime $dateArrivee
     *
     * @return Colis
     */
    public function setDateArrivee($date)
    {
        $this->dateArrivee = strtotime("+7 day", strtotime($date));

        return $this;
    }

    /**
     * Get dateArrivee
     *
     * @return \DateTime
     */
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }
}

