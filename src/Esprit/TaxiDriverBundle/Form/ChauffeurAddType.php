<?php

namespace Esprit\TaxiDriverBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChauffeurAddType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numpermis')
            ->add('etat')
         ->add('note')
            ->add('pwd')
            ->add('login')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('telephone')
            ->add('adresse')
            ->add('cin')
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
            'data_class' => 'Esprit\TaxiDriverBundle\Entity\Chauffeur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_taxidriverbundle_chauffeur';
    }
}
