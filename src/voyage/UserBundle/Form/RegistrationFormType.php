<?php

namespace voyage\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
 $builder->add('Nom');
 $builder->add('Prenom');
 $builder->add('Adresse');
 $builder->add('Telephone');
 $builder->add('Cin');
 parent::buildForm($builder, $options);
        // add your custom field
       
    }

    public function getName()
    {
        return 'fos_user_register';
    }
}
