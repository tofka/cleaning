<?php

namespace Cleaning\CleaningBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('timestamp')
            ->add('task')
            ->add('person')
            ->add('room')
        ;
    }       

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cleaning\CleaningBundle\Entity\Event'
        ));
    }

    public function getName()
    {
        return 'cleaning_cleaningbundle_eventtype';
    }
}
