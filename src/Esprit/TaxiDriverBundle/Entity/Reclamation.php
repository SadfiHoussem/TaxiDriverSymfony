<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="sujetReclamation", type="string", length=25, nullable=false)
     */
    private $sujetreclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=500, nullable=false)
     */
    private $contenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;

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
     * Get idreclamation
     *
     * @return integer 
     */
    public function getIdreclamation()
    {
        return $this->idreclamation;
    }

    /**
     * Set sujetreclamation
     *
     * @param string $sujetreclamation
     * @return Reclamation
     */
    public function setSujetreclamation($sujetreclamation)
    {
        $this->sujetreclamation = $sujetreclamation;
    
        return $this;
    }

    /**
     * Get sujetreclamation
     *
     * @return string 
     */
    public function getSujetreclamation()
    {
        return $this->sujetreclamation;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Reclamation
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Reclamation
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
     * Set date
     *
     * @param \DateTime $date
     * @return Reclamation
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idclient
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Client $idclient
     * @return Reclamation
     */
    public function setIdclient(\Esprit\TaxiDriverBundle\Entity\Client $idclient = null)
    {
        $this->idclient = $idclient;
    
        return $this;
    }

    /**
     * Get idclient
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Client 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set idagence
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Agence $idagence
     * @return Reclamation
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