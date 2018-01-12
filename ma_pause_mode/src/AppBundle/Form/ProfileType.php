<?php


namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, array('label' => 'Prenom', 'attr' => array(
            'class' => 'form-control'
            )))
            ->add('username', null, array('label' => 'Nom', 'attr' => array(
            'class' => 'form-control'
            )))
            ->add('pseudo', null , array('label' => 'Pseudonyme', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('siret', null, array('label' => 'N° Siret', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('address', null, array('label' => 'Addresse', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('pc', null, array('label' => 'Code Postal', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('city', null, array('label' => 'Ville', 'attr' => array(
                'class' => 'form-control'
            )));
    }

    public function getParent() 
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }
}
