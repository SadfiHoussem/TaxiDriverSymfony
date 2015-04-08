<?php

namespace Esprit\TaxiDriverBundle\Entity;
use Doctrine\ORM\EntityRepository;


class ReservationRepository extends EntityRepository{

    public function findByClientConfDQL($agence,$client){
        
        $currentdate = new \DateTime('now'); //Date du jour
        $query=$this->getEntityManager()
            ->createQuery("SELECT c.nom, c.prenom, c.note,v.typevoiture,v.nbrplace,tr.adressedep,tr.adressedest,tr.cout,a.nomagence,r.date,r.confirme from EspritTaxiDriverBundle:Reservation r JOIN r.idtaxi t JOIN r.idtrajet tr JOIN r.idagence a JOIN t.idchauffeur c JOIN t.matricule v WHERE r.idagence= :idagence and r.idclient= :idclient and r.done=0 and r.date > :date")->setParameters(array('idagence'=>$agence,'idclient'=>$client,'date'=>$currentdate));
        return $query->getResult();
    }
}
