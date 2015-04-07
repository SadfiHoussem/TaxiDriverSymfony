<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table(name="destination")
 * @ORM\Entity
 */
class Destination
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDestination", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddestination;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=80, nullable=false)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=80, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=100, nullable=false)
     */
    private $region;

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
     * Get iddestination
     *
     * @return integer 
     */
    public function getIddestination()
    {
        return $this->iddestination;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Destination
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Destination
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Destination
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
     * Set region
     *
     * @param string $region
     * @return Destination
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set idagence
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Agence $idagence
     * @return Destination
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