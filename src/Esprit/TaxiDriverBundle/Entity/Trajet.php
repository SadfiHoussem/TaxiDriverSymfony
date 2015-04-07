<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet")
 * @ORM\Entity(repositoryClass="Esprit\TaxiDriverBundle\Entity\TrajetRepository")
 */
class Trajet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTrajet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtrajet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseDep", type="string", length=100, nullable=false)
     */
    private $adressedep;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseDest", type="string", length=100, nullable=false)
     */
    private $adressedest;

    /**
     * @var float
     *
     * @ORM\Column(name="cout", type="float", nullable=false)
     */
    private $cout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var \Agence
     *
     * @ORM\ManyToOne(targetEntity="Agence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgence", referencedColumnName="idAgence")
     * })
     */
    private $idagence;



    /**
     * Get idtrajet
     *
     * @return integer 
     */
    public function getIdtrajet()
    {
        return $this->idtrajet;
    }

    /**
     * Set adressedep
     *
     * @param string $adressedep
     * @return Trajet
     */
    public function setAdressedep($adressedep)
    {
        $this->adressedep = $adressedep;
    
        return $this;
    }

    /**
     * Get adressedep
     *
     * @return string 
     */
    public function getAdressedep()
    {
        return $this->adressedep;
    }

    /**
     * Set adressedest
     *
     * @param string $adressedest
     * @return Trajet
     */
    public function setAdressedest($adressedest)
    {
        $this->adressedest = $adressedest;
    
        return $this;
    }

    /**
     * Get adressedest
     *
     * @return string 
     */
    public function getAdressedest()
    {
        return $this->adressedest;
    }

    /**
     * Set cout
     *
     * @param float $cout
     * @return Trajet
     */
    public function setCout($cout)
    {
        $this->cout = $cout;
    
        return $this;
    }

    /**
     * Get cout
     *
     * @return float 
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Trajet
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set idagence
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Agence $idagence
     * @return Trajet
     */
    public function setIdagence(\Esprit\TaxiDriverBundle\Entity\Agence $idagence = null)
    {
        $this->idagence = $idagence;
    
        return $this;
    }

    /**
     * Get idagence
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Agence 
     */
    public function getIdagence()
    {
        return $this->idagence;
    }
}