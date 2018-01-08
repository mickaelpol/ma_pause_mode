<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', CKEditorType::class, array(
            'label' => 'titre',
            'config' => array(
                'toolbar' => 'basic'
            )
        ))

        ->add('content', CKEditorType::class, array(
            'label' => 'contenu',
            'config' => array(
            'class' => 'ckeditor', 'class' => 'form-control',
        )))
        ->add('description', TextType::class , array('label' => 'description', 'translation_domain' => 'FOSUserBundle'));
        // ->add('ville', null, array('label' => 'Ville', 'translation_domain' => 'FOSUserBundle'));
        // ->add('date')
        // ->add('dateUpdate');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_article';
    }


}
