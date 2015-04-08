<?php
namespace Esprit\TaxiDriverBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;

class GrapheController extends Controller{
public function chartPieAction(){
$ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Statistique des Notes des$d Chauffeurs');
$ob->plotOptions->pie(array(
'allowPointSelect' => true,
'cursor' => 'pointer',
'dataLabels' => array('enabled' => false),
'showInLegend' => true
));

$em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                "SELECT count(c.idchauffeur) 
                 FROM EspritTaxiDriverBundle:Chauffeur c 
                 WHERE (c.note) >= '0' AND  (c.note) <= '10'"
                );
        $Chauffeur = $query->getSingleScalarResult();
        $c=(int)$Chauffeur;

        
$em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                "SELECT count(d.idchauffeur) 
                 FROM EspritTaxiDriverBundle:Chauffeur d 
                 WHERE (d.note) > '10' AND  (d.note) <= '20'"
                );
        $Chauffeur = $query->getSingleScalarResult();
        $d=(int)$Chauffeur;        
$data = array(
array('note -10', $c),
array('note +10', $d),

);
$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));
return $this->render('EspritTaxiDriverBundle:Graphe:pie.html.twig', array(
'chart' => $ob
));
}

public function chartHistogrammeAction()
{
    
    $em5 = $this->getDoctrine()->getManager();
        $query5 = $em5->createQuery(
                "SELECT count(c.idoffre) 
                 FROM EspritTaxiDriverBundle:Offre c 
                 WHERE (c.date) >= '2015-01-01' AND  (c.date) <= '2015-01-30'"
                );
        $Offre = $query5->getSingleScalarResult();
        $c=(int)$Offre;
        

    
        $em6 = $this->getDoctrine()->getManager();
        $query6 = $em6->createQuery(
                "SELECT count(a.idoffre) 
                 FROM EspritTaxiDriverBundle:Offre a 
                 WHERE (a.date) >= '2015-02-01' AND  (a.date) <= '2015-02-30'"
                );
        $Offre = $query6->getSingleScalarResult();
        $a=(int)$Offre;
        
       
        $em7 = $this->getDoctrine()->getManager();
        $query7 = $em7->createQuery(
                "SELECT count(b.idoffre) 
                 FROM EspritTaxiDriverBundle:Offre b 
                 WHERE (b.date) >= '2015-03-01' AND  (b.date) <= '2015-03-30'"
                );
        $Offre = $query7->getSingleScalarResult();
        $b=(int)$Offre;
        

        $em8 = $this->getDoctrine()->getManager();
        $query8 = $em8->createQuery(
                "SELECT count(g.idoffre) 
                 FROM EspritTaxiDriverBundle:Offre g 
                 WHERE (g.date) >= '2015-04-01' AND  (g.date) <= '2015-04-30'"
                );
        $Offre = $query8->getSingleScalarResult();
        $g=(int)$Offre;
        
    
        $em9 = $this->getDoctrine()->getManager();
        $query9 = $em9->createQuery(
                "SELECT count(h.idoffre) 
                 FROM EspritTaxiDriverBundle:Offre h 
                 WHERE (h.date) >= '2014-12-01' AND  (h.date) <= '2014-12-30'"
                );
        $Offre = $query9->getSingleScalarResult();
        $h=(int)$Offre;
        
      
        $em10 = $this->getDoctrine()->getManager();
        $query10 = $em10->createQuery(
                "SELECT count(i.idoffre) 
                 FROM EspritTaxiDriverBundle:Offre i 
                 WHERE (i.date) >= '2014-11-01' AND  (i.date) <= '2014-11-30'"
                );
        $Offre = $query10->getSingleScalarResult();
        $i=(int)$Offre;
        
        
        
     
        
        
        $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(j.idreclamation) 
                 FROM EspritTaxiDriverBundle:Reclamation j 
                 WHERE (j.date) >= '2014-11-01' AND  (j.date) <= '2014-11-30'"
                );
        $Reclamation = $query11->getSingleScalarResult();
        $j=(int)$Reclamation ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(k.idreclamation) 
                 FROM EspritTaxiDriverBundle:Reclamation k 
                 WHERE (k.date) >= '2014-12-01' AND  (k.date) <= '2014-12-30'"
                );
        $Reclamation = $query11->getSingleScalarResult();
        $k=(int)$Reclamation ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(l.idreclamation) 
                 FROM EspritTaxiDriverBundle:Reclamation l 
                 WHERE (l.date) >= '2015-01-01' AND  (l.date) <= '2015-01-30'"
                );
        $Reclamation = $query11->getSingleScalarResult();
        $l=(int)$Reclamation ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(m.idreclamation) 
                 FROM EspritTaxiDriverBundle:Reclamation m 
                 WHERE (m.date) >= '2015-02-01' AND  (m.date) <= '2015-02-30'"
                );
        $Reclamation = $query11->getSingleScalarResult();
        $m=(int)$Reclamation ;
        
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(n.idreclamation) 
                 FROM EspritTaxiDriverBundle:Reclamation n 
                 WHERE (n.date) >= '2015-03-01' AND  (n.date) <= '2015-03-30'"
                );
        $Reclamation = $query11->getSingleScalarResult();
        $n=(int)$Reclamation ;
        
        
        
         $em11 = $this->getDoctrine()->getManager();
        $query11 = $em11->createQuery(
                "SELECT count(o.idreclamation) 
                 FROM EspritTaxiDriverBundle:Reclamation o 
                 WHERE (o.date) >= '2015-04-01' AND  (o.date) <= '2015-04-30'"
                );
        $Reclamation = $query11->getSingleScalarResult();
        $o=(int)$Reclamation ;
        
        
        
        
$series = array(
    array(
        'name'  => 'Nombre D\'offre ',
        'type'  => 'column',
        'color' => '#4572A7',
        'yAxis' => 1,
        'data'  => array($i,$h,$c, $a, $b, $g),
    ),
    array(
        'name'  => 'Nombre De Reclamation ',
        'type'  => 'spline',
        'color' => '#AA4643',
        'data'  => array($j,$k,$l,$m,$n,$o),
    ),
);
$yData = array(
    array(
        'labels' => array(
            'formatter' => new Expr('function () { return this.value + "" }'),
            'style'     => array('color' => '#AA4643')
        ),
        'title' => array(
            'text'  => 'Nombre de Reclamation',
            'style' => array('color' => '#AA4643')
        ),
        'opposite' => true,
    ),
    array(
        'labels' => array(
            'formatter' => new Expr('function () { return this.value + "" }'),
            'style'     => array('color' => '#4572A7')
        ),
        'gridLineWidth' => 0,
        'title' => array(
            'text'  => 'Nombre D\'offre',
            'style' => array('color' => '#4572A7')
        ),
    ),
); 

$categories = array('Nov', 'Dec', 'Jan','Fev', 'Mar', 'Avr');

$ob = new Highchart();
$ob->chart->renderTo('container'); // The #id of the div where to render the chart
$ob->chart->type('column');
$ob->title->text('Evolution du nombre d\'offre et reclamation');
$ob->xAxis->categories($categories);
$ob->yAxis($yData);
$ob->legend->enabled(false);
$formatter = new Expr('function () {
                 var unit = {
                     "Nombre D\'offre": "",
                     "Nombre de Reclamation": ""
                 }[this.series.name];
                 return this.x + ": <b>" + this.y + "</b> " + unit;
             }');
$ob->tooltip->formatter($formatter);
$ob->series($series);
return $this->render('EspritTaxiDriverBundle:Graphe:histogramme.html.twig', array(
        'chart' => $ob
    ));   
}



}
