<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity(repositoryClass="Esprit\TaxiDriverBundle\Entity\OffreRepository")
 * 
 */
class Offre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idOffre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoffre;

    /**
     * @var string
     *
     * @ORM\Column(name="sujetOffre", type="string", length=25, nullable=false)
     */
    private $sujetoffre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=500, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

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
     * Get idoffre
     *
     * @return integer 
     */
    public function getIdoffre()
    {
        return $this->idoffre;
    }

    /**
     * Set sujetoffre
     *
     * @param string $sujetoffre
     * @return Offre
     */
    public function setSujetoffre($sujetoffre)
    {
        $this->sujetoffre = $sujetoffre;
    
        return $this;
    }

    /**
     * Get sujetoffre
     *
     * @return string 
     */
    public function getSujetoffre()
    {
        return $this->sujetoffre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Offre
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
     * Set date
     *
     * @param \DateTime $date
     * @return Offre
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
     * Set idagence
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Agence $idagence
     * @return Offre
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