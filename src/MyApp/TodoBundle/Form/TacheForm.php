<?php

namespace MyApp\TodoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TacheForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
            ->add('titre')
            ->add('description')
            ->add('dateTache', 'birthday')        
        ;
    }
    
    public function getName()
    {
        return 'tache';
    }    
}
?>