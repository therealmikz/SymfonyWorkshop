<?php

namespace PHPCon\WorkshopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkshopType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', ['required' => false])
            ->add('date')
            ->add('save', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PHPCon\WorkshopBundle\Entity\Workshop'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'phpcon_workshopbundle_workshop';
    }
}
