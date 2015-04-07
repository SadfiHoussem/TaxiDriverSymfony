<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="Esprit\TaxiDriverBundle\Entity\VoitureRepository")
 */
class Voiture
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matricule;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPlace", type="integer", nullable=false)
     */
    private $nbrplace;

    /**
     * @var string
     *
     * @ORM\Column(name="typeVoiture", type="string", length=25, nullable=false)
     */
    private $typevoiture;

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
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nbrplace
     *
     * @param integer $nbrplace
     * @return Voiture
     */
    public function setNbrplace($nbrplace)
    {
        $this->nbrplace = $nbrplace;
    
        return $this;
    }

    /**
     * Get nbrplace
     *
     * @return integer 
     */
    public function getNbrplace()
    {
        return $this->nbrplace;
    }

    /**
     * Set typevoiture
     *
     * @param string $typevoiture
     * @return Voiture
     */
    public function setTypevoiture($typevoiture)
    {
        $this->typevoiture = $typevoiture;
    
        return $this;
    }

    /**
     * Get typevoiture
     *
     * @return string 
     */
    public function getTypevoiture()
    {
        return $this->typevoiture;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Voiture
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
     * @return Voiture
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