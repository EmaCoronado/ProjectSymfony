<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReservacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaReservacion', DateType::class, array(
                "widget"=>"single_text",                                                
                "attr" => array("class"=>"form-control","placeholder"=>"2017-09-11", "title"=>"Ingrese la fecha de la Reservación")))
            ->add('fechaUso', DateType::class, array(
                "widget"=>"single_text",                                                
                "attr" => array("class"=>"form-control","placeholder"=>"2017-09-11", "title"=>"Ingrese la fecha de Uso")))
            ->add('idEmpleado')
            ->add('idHabitacion')
            ->add('idCliente')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Reservacion'
        ));
    }
}
