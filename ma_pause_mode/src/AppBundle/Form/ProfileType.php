<?php


namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{

    public function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildUserForm($builder, $options);
        $builder
            ->add('FirstName')
            ->add('Pseudo');
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
