<?php


namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

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
            ->add('city', null, array('label' => 'Ville','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('entreprise', null, array('label' => 'Entreprise', 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('phoneNumber', null, array('label' => 'Téléphone','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('siteWeb', null, array('label' => 'Site web','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('lienSiteWeb', null, array('label' => 'Lien du site web','required' => false, 'attr' => array(
                'class' => 'form-control'
            )))
            ->add('imageProfilFile', FileType::class, array(
                'label' => 'Photo de profil', 'required' => false
            ))
            ->add('facebook', null , array('label' => 'Lien de votre facebook', 'required' => false))
            ->add('instagram', null , array('label' => 'Lien de votre instagram', 'required' => false))
            ->add('twitter', null , array('label' => 'Lien de votre twitter', 'required' => false))
            ->add('pinterest', null , array('label' => 'Lien de votre pinterest', 'required' => false))
            ->add('google', null , array('label' => 'Lien de votre google +', 'required' => false));
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
