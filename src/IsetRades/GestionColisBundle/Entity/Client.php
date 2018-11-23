<?php

namespace IsetRades\GestionColisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="IsetRades\GestionColisBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cin", type="string")
     * @ORM\Cin
     * 
     */
    private $Cin;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=60, nullable=true)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="Code_postale", type="integer", nullable=true)
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_clt", type="string", length=50, nullable=true)
     */
    private $typeClt;


    /**
     * Get id
     *
     * @return int
     */
    //constructeur
    function __construct() {
     
  }
    public function getCin()
    {
        return $this->Cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostale
     *
     * @param integer $codePostale
     *
     * @return Client
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return int
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set typeClt
     *
     * @param string $typeClt
     *
     * @return Client
     */
    public function setTypeClient($typeClt)
    {
        $this->typeClt = $typeClt;

        return $this;
    }

    /**
     * Get typeClt
     *
     * @return string
     */
    public function getTypeClient()
    {
        return $this->typeClt;
    }
}

