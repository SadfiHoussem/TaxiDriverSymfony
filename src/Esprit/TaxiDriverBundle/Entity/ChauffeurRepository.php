<?php

namespace Esprit\TaxiDriverBundle\Entity;
use Doctrine\ORM\EntityRepository;

class ChauffeurRepository extends EntityRepository{
    
    public function findByAgenceDQL($agence){
        
        $query=$this->getEntityManager()
            ->createQuery("SELECT c.idchauffeur,c.nom,c.prenom,c.note,a.nomagence,c.numpermis,c.etat,c.email,c.telephone,c.cin,c.adresse from EspritTaxiDriverBundle:Chauffeur c JOIN c.idagence a WHERE c.idagence= :id")->setParameter('id', $agence);
        return $query->getResult();
    
    }
}
