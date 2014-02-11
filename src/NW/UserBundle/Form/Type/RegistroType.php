<?php
// src/NW/UserBundle/Form/Type/RegistroType.php
namespace NW\UserBundle\Form\Type;

use NW\UserBundle\Form\Type\NoviazgoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class RegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Se cargan los formularios para el novio y la novia
        //$builder->add('novias', new NoviazgoType());
        $builder->add('novios',  new NoviazgoType());

        // Se genera el formulario para el registro de usuarios
        $builder->add('userName', 'text', array('mapped' => false, 'required'  => true));
        $builder->add('userPass', 'password', array('mapped' => false, 'required'  => true));
        $builder->add('terminosCondiciones', 'checkbox', array('mapped' => false, 'required'  => true));
        $builder->add('terminosPrivacidad', 'checkbox', array('mapped' => false, 'required'  => true));
    }

    public function getName()
    {
        return 'registro';
    }
}