<?php
namespace NW\PrincipalBundle\Form\Type;

/*
use Symfony\Component\Form\FormViewInterface;
use Symfony\Component\Form\FormInterface;

use NW\PrincipalBundle\Form\Type\DatosArticuloType;
use NW\PrincipalBundle\Form\Type\FotosArticulosType;
*/

use NW\PrincipalBundle\Form\Type\DatosArticuloType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticuloType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Se carga el formulario para fotos
        $builder->add('datos', new DatosArticuloType());
        $builder->add('categoria', new CategoriasType());
        $builder->add('foto', new FotosArticulosType());

        // Formulario de articulo
        $builder->add('terminosCondiciones', 'checkbox', array('mapped' => false, 'required'  => true));
        $builder->add('terminosPrivacidad', 'checkbox', array('mapped' => false, 'required'  => true));
        $builder->add('Agregar', 'submit');
    }

    /*public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NW\PrincipalBundle\Entity\Articulos'
        ));
    }*/

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'articulo';
    }
}