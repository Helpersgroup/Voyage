<?php

namespace voyage\FirstBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_Annonce')
            ->add('id_Annonceur')
            ->add('nom')
            ->add('date_Deb')
            ->add('date_Fin')
            ->add('depart')
            ->add('destination')
            ->add('description')
            ->add('hebergement')
            ->add('type_Hebergement')
            ->add('type_Annonce')
            ->add('transport')
            ->add('note')
            ->add('etat')
            ->add('prix')
            ->add('signalisation')
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'voyage\FirstBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'voyage_firstbundle_annonce';
    }
}
