<?php

namespace Esprit\TaxiDriverBundle\Entity;
use Doctrine\ORM\EntityRepository;

class VoitureRepository extends EntityRepository{
    
    public function findByAgenceDQL($agence){
        
        $query=$this->getEntityManager()
            ->createQuery("SELECT v.matricule ,v.nbrplace ,v.typevoiture ,v.etat,a.nomagence from EspritTaxiDriverBundle:Voiture v JOIN v.idagence a WHERE v.idagence= :id")->setParameter('id', 1);
        return $query->getResult();
    }
}