<?php

namespace Esprit\TaxiDriverBundle\Entity;
use Doctrine\ORM\EntityRepository;

class TrajetRepository extends EntityRepository{
    
    public function findBySrcDestDQL($agence,$src,$dest){
        
        $query=$this->getEntityManager()
            ->createQuery("SELECT t.idtrajet from EspritTaxiDriverBundle:Trajet t WHERE t.idagence= :id and t.adressedep= :dep and t.adressedest= :dest")->setParameters(array('id'=>$agence,'dep'=>$src,'dest'=>$dest));
        return $query->getSingleResult();
    
    //->createQuery("SELECT e from ExamenTunivisionCultureBundle:Reservation r,ExamenTunivisionCultureBundle:Evenement e WHERE r.email='blabla' and e.id=r.Evenements.id");
    //->createQuery("SELECT e from ExamenTunivisionCultureBundle:Reservation r JOIN r.Evenements e WHERE r.email='blabla'");
    
    }
}
