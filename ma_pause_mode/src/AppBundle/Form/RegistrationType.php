<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('firstName', textType::class, array('label' => 'firstname', 'attr' => array(
            'class' => 'form-control'
            )))
            ->add('username', null, array('label' => 'username', 'attr' => array(
            'class' => 'form-control'
            )))
            ->add('pseudo', null , array('label' => 'pseudo', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('siret', null, array('label' => 'N° Siret', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('address', null, array('label' => 'Addresse','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('pc', null, array('label' => 'Code Postal','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('city', null, array('label' => 'Ville', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('entreprise', null, array('label' => 'Entreprise', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('phoneNumber', null, array('label' => 'Téléphone','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('siteWeb', null, array('label' => 'Nom du Site web','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('lienSiteWeb', null, array('label' => 'Lien du site web','required' => false, 'attr' => array(
                'class' => 'form-control'
            )));

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
