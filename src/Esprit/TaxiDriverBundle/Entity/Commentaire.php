<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaire;

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
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOffre", referencedColumnName="idOffre")
     * })
     */
    private $idoffre;



    /**
     * Get idcommentaire
     *
     * @return integer 
     */
    public function getIdcommentaire()
    {
        return $this->idcommentaire;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
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
     * @return Commentaire
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
     * @return Commentaire
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
     * Set idoffre
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Offre $idoffre
     * @return Commentaire
     */
    public function setIdoffre(\Esprit\TaxiDriverBundle\Entity\Offre $idoffre = null)
    {
        $this->idoffre = $idoffre;
    
        return $this;
    }

    /**
     * Get idoffre
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Offre 
     */
    public function getIdoffre()
    {
        return $this->idoffre;
    }
}