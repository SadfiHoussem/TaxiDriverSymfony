<?php
namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;

class StatistiqueController  extends Controller{
    
public function chartHistogrammeAction() {
    
        $ob = new Highchart();
        $ob->chart->renderTo('container');
        $ob->title->text('Statistiques des clients');
        

         $em = $this->getDoctrine()->getEntityManager();
       
         
        
        $query1 = $em->createQuery("SELECT count(c) as clt FROM PidevTaxiBundle:Client c  where c.actif like '1' ");
        $act = $query1->getResult();
        $query2 = $em->createQuery("SELECT count(c) as clt FROM PidevTaxiBundle:Client c where c.actif like '0' ");
        $inact = $query2->getResult();
       
        
        $data = array();
      
        foreach ($act as $values) {
            
            $a = array('Clients actifs', intval($values['clt']));
            array_push($data, $a);//print_r($data);exit();
            }
        foreach ($inact as $values) {
            
            $a = array('Clients inactifs', intval($values['clt']));
            array_push($data, $a);//print_r($data);exit();
            }    
        
        
       
        
      
      
            $series = array(
            array(
                'name' => 'Pourcentage',
                'type' => 'column',
                'color' => 'grey',
                'yAxis' => 1,
                'data' => $data,
            ),

        );
       
        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value }'),
                    'style' => array('color' => '#AA4643')
                ),

                
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " %" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 1,
                'title' => array(
                    'text' => 'Pourcentage',
                    'style' => array('color' => 'black')
                ),
            ),
        );
        
       

        $ob->chart->type('column');//print_r($data);exit();
      
       $note = array();
       
        $ob->xAxis->categories($note);
        
        $ob->yAxis($yData);
        $ob->legend->enabled(true);
        $formatter = new Expr('function () {
var unit = {
"Pourcentage": "%",

}[this.series.name];
return this.x + ": <b>" + this.y + "</b> " + unit;
}');
//          var_dump($series);die();
        $ob->tooltip->formatter($formatter);
        
        $ob->series($series);
        
        return $this->render('EspritTaxiDriverBundle:Administrateur:histogramme.html.twig', array(
                    'chart' => $ob
        ));

}}
