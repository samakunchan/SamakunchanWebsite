<?php

namespace SAM\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('description', TextareaType::class)
            ->add('url', TextType::class)
            ->add('image', CollectionType::class, [
                'entry_type'   => ImageType::class,
                'allow_add'    => true,
                'allow_delete' => true])
            ->add('technologies', CollectionType::class, [
                'entry_type'   => TechnologyType::class,
                'allow_add'    => true,
                'allow_delete' => true])
            ->add('save', SubmitType::class)
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SAM\PortfolioBundle\Entity\Project'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sam_portfoliobundle_project';
    }


}
