<?php

namespace Esprit\TaxiDriverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="Esprit\TaxiDriverBundle\Entity\ReservationRepository")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirme", type="boolean", nullable=false)
     */
    private $confirme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="done", type="boolean", nullable=false)
     */
    private $done;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \Agence
     * 
     * Bidirectional (OWNING SIDE - FK)
     *
     * @ORM\ManyToOne(targetEntity="Agence", inversedBy="idAgence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgence", referencedColumnName="idAgence")
     * })
     */
    private $idagence;

    /**
     * @var \Client
     * 
     * Bidirectional (OWNING SIDE - FK)
     *
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;

    /**
     * @var \Trajet
     * 
     * Bidirectional (OWNING SIDE - FK)
     *
     * @ORM\ManyToOne(targetEntity="Trajet", inversedBy="reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTrajet", referencedColumnName="idTrajet")
     * })
     */
    private $idtrajet;

    /**
     * @var \Taxi
     * 
     * Bidirectional (OWNING SIDE - FK)
     *
     * @ORM\ManyToOne(targetEntity="Taxi", inversedBy="reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTaxi", referencedColumnName="idTaxi")
     * })
     */
    private $idtaxi;



    /**
     * Get idreservation
     *
     * @return integer 
     */
    public function getIdreservation()
    {
        return $this->idreservation;
    }

    /**
     * Set confirme
     *
     * @param boolean $confirme
     * @return Reservation
     */
    public function setConfirme($confirme)
    {
        $this->confirme = $confirme;
    
        return $this;
    }

    /**
     * Get confirme
     *
     * @return boolean 
     */
    public function getConfirme()
    {
        return $this->confirme;
    }

    /**
     * Set done
     *
     * @param boolean $done
     * @return Reservation
     */
    public function setDone($done)
    {
        $this->done = $done;
    
        return $this;
    }

    /**
     * Get done
     *
     * @return boolean 
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Reservation
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
     * @return Reservation
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
     * Set idclient
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Client $idclient
     * @return Reservation
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
     * Set idtrajet
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Trajet $idtrajet
     * @return Reservation
     */
    public function setIdtrajet(\Esprit\TaxiDriverBundle\Entity\Trajet $idtrajet = null)
    {
        $this->idtrajet = $idtrajet;
    
        return $this;
    }

    /**
     * Get idtrajet
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Trajet 
     */
    public function getIdtrajet()
    {
        return $this->idtrajet;
    }

    /**
     * Set idtaxi
     *
     * @param \Esprit\TaxiDriverBundle\Entity\Taxi $idtaxi
     * @return Reservation
     */
    public function setIdtaxi(\Esprit\TaxiDriverBundle\Entity\Taxi $idtaxi = null)
    {
        $this->idtaxi = $idtaxi;
    
        return $this;
    }

    /**
     * Get idtaxi
     *
     * @return \Esprit\TaxiDriverBundle\Entity\Taxi 
     */
    public function getIdtaxi()
    {
        return $this->idtaxi;
    }
}