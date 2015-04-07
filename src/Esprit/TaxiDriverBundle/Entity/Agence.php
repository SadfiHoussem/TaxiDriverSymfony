<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agence
 *
 * @ORM\Table(name="agence")
 * @ORM\Entity
 */
class Agence
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAgence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagence;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAgence", type="string", length=50, nullable=false)
     */
    private $nomagence;

    /**
     * @var integer
     *
     * @ORM\Column(name="telAgence", type="integer", nullable=false)
     */
    private $telagence;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseAgence", type="string", length=50, nullable=false)
     */
    private $adresseagence;

    /**
     * @var \Responsableagence
     *
     * @ORM\ManyToOne(targetEntity="Responsableagence", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRespAgence", referencedColumnName="idRespAgence")
     * })
     */
    private $idrespagence;


    /**
     * Set idagence
     *
     * @param integer $idagence
     * @return Agence
     */
    function setIdagence($idagence) {
        $this->idagence = $idagence;
    }

        
    /**
     * Get idagence
     *
     * @return integer 
     */
    public function getIdagence()
    {
        return $this->idagence;
    }

    /**
     * Set nomagence
     *
     * @param string $nomagence
     * @return Agence
     */
    public function setNomagence($nomagence)
    {
        $this->nomagence = $nomagence;
    
        return $this;
    }

    /**
     * Get nomagence
     *
     * @return string 
     */
    public function getNomagence()
    {
        return $this->nomagence;
    }

    /**
     * Set telagence
     *
     * @param integer $telagence
     * @return Agence
     */
    public function setTelagence($telagence)
    {
        $this->telagence = $telagence;
    
        return $this;
    }

    /**
     * Get telagence
     *
     * @return integer 
     */
    public function getTelagence()
    {
        return $this->telagence;
    }

    /**
     * Set adresseagence
     *
     * @param string $adresseagence
     * @return Agence
     */
    public function setAdresseagence($adresseagence)
    {
        $this->adresseagence = $adresseagence;
    
        return $this;
    }

    /**
     * Get adresseagence
     *
     * @return string 
     */
    public function getAdresseagence()
    {
        return $this->adresseagence;
    }

    /**
     * Set idrespagence
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Responsableagence $idrespagence
     * @return Agence
     */
    public function setIdrespagence(\Esprit\TaxiDriverBundle\Entity\Responsableagence $idrespagence = null)
    {
        $this->idrespagence = $idrespagence;
    
        return $this;
    }

    /**
     * Get idrespagence
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Responsableagence 
     */
    public function getIdrespagence()
    {
        return $this->idrespagence;
    }
}