<?php

namespace Esprit\TaxiDriverBundle\Entity;
use Doctrine\ORM\EntityRepository;

class OffreRepository extends EntityRepository{
    
    public function findByAgenceDQL($agence){
        
        $query=$this->getEntityManager()
            ->createQuery("SELECT o.idoffre,o.sujetoffre,o.contenu,o.date,a.nomagence from EspritTaxiDriverBundle:Offre o JOIN o.idagence a WHERE o.idagence= :id")->setParameter('id', 1);
        return $query->getResult();
    }
}
