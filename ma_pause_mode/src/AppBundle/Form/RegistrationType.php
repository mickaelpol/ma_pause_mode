<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('siret', null, array('label' => 'n°siret', 'translation_domain' => 'FOSUserBundle'))
        ->add('firstName', null, array('label' => 'Prenom', 'translation_domain' => 'FOSUserBundle'))
        ->add('pseudo', null, array('label' => 'Pseudo', 'translation_domain' => 'FOSUserBundle'))
        ->add('address', null, array('label' => 'Address', 'translation_domain' => 'FOSUserBundle'))
        ->add('city', null, array('label' => 'City', 'translation_domain' => 'FOSUserBundle'))
        ->add('pc', null, array('label' => 'Postal code', 'translation_domain' => 'FOSUserBundle'));

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
