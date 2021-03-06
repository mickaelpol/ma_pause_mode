<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use AppBundle\Entity\Category;



class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', CKEditorType::class, array(
            'label' => 'Titre de l\'article',
            'config_name' => 'my_config_1',
        ))

        ->add('content', CKEditorType::class, array(
            'label' => 'Contenu de l\'article',
            'config_name' => 'my_config_2',
        ))
        ->add('description', TextType::class , array('label' => 'Description de l\'article'))
            ->add('category', 'collection', [
                'type' => new ArrayCollection(),
                'allow_add' => true,
                'allow_delete' => true
            ]);
        
    }
    
    /**
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
