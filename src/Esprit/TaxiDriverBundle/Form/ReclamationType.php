<?php

namespace Esprit\TaxiDriverBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReclamationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sujetreclamation')
            ->add('contenu')
            ->add('date')
            ->add('etat', 'checkbox', array(
    'label'     => 'Confirmation',
    'required'  => false,
))
            ->add('idAgence','entity', array(
            'class' => 'EspritTaxiDriverBundle:Agence',
            'property'=>'nomAgence',
            'label' => 'Agence:'
        ))
                     ->add('idClient','entity', array(
            'class' => 'EspritTaxiDriverBundle:Client',
            'property'=>'nom',
            'label' => 'Client:'
        ))        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\TaxiDriverBundle\Entity\Reclamation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_taxidriverbundle_reclamation';
    }
}
