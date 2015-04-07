<?php

namespace Esprit\TaxiDriverBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VoitureType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule')
            ->add('nbrplace')
            ->add('typevoiture')
            ->add('etat', 'checkbox', array(
    'label'     => 'Disponibilité',
    'required'  => false,
))
            
            ->add('idAgence','entity', array(
            'class' => 'EspritTaxiDriverBundle:Agence',
            'property'=>'nomAgence',
            'label' => 'Agence:'
        ))
      
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\TaxiDriverBundle\Entity\Voiture'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_taxidriverbundle_voiture';
    }
}
