<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxi
 *
 * @ORM\Table(name="taxi")
 * @ORM\Entity(repositoryClass="Esprit\TaxiDriverBundle\Entity\TaxiRepository")
 * 
 */
class Taxi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTaxi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtaxi;

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
     * @var \Chauffeur
     *
     * @ORM\ManyToOne(targetEntity="Chauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChauffeur", referencedColumnName="idChauffeur")
     * })
     */
    private $idchauffeur;

    /**
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule", referencedColumnName="matricule")
     * })
     */
    private $matricule;



    /**
     * Get idtaxi
     *
     * @return integer 
     */
    public function getIdtaxi()
    {
        return $this->idtaxi;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Taxi
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
     * @return Taxi
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

    /**
     * Set idchauffeur
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Chauffeur $idchauffeur
     * @return Taxi
     */
    public function setIdchauffeur(\Esprit\TaxiDriverBundle\Entity\Chauffeur $idchauffeur = null)
    {
        $this->idchauffeur = $idchauffeur;
    
        return $this;
    }

    /**
     * Get idchauffeur
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Chauffeur 
     */
    public function getIdchauffeur()
    {
        return $this->idchauffeur;
    }

    /**
     * Set matricule
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Voiture $matricule
     * @return Taxi
     */
    public function setMatricule(\Esprit\TaxiDriverBundle\Entity\Voiture $matricule = null)
    {
        $this->matricule = $matricule;
    
        return $this;
    }

    /**
     * Get matricule
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Voiture 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }
}