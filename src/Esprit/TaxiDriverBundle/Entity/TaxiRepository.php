<?php

namespace Esprit\TaxiDriverBundle\Entity;
use Doctrine\ORM\EntityRepository;

class TaxiRepository extends EntityRepository{
    
    public function findByTaxiDQL($agence){
        
        $query=$this->getEntityManager()
            ->createQuery("SELECT t.idtaxi, c.nom,c.prenom,c.note,v.typevoiture,v.nbrplace from EspritTaxiDriverBundle:Taxi t JOIN t.matricule v JOIN t.idchauffeur c WHERE t.idagence= :id")->setParameter('id', $agence);
        return $query->getResult();
    
    //->createQuery("SELECT e from ExamenTunivisionCultureBundle:Reservation r,ExamenTunivisionCultureBundle:Evenement e WHERE r.email='blabla' and e.id=r.Evenements.id");
    //->createQuery("SELECT e from ExamenTunivisionCultureBundle:Reservation r JOIN r.Evenements e WHERE r.email='blabla'");
    
    }
}

