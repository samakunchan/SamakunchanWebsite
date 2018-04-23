<?php

namespace SAM\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CertificationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('certifNumber', TextType::class)
            ->add('url', TextType::class)
            ->add('image', ImageType::class)
            ->add('tag', ChoiceType::class,
                [
                    'choices' => [
                        'Web général' => 'web',
                        'HTML/CSS3'=> 'html',
                        'Javascript' => 'js',
                        'PHP' => 'php'
                    ]
                ])
            ->add('technologies', CollectionType::class, [
                'entry_type'   => TechnologyType::class,
                'allow_add'    => true,
                'allow_delete' => true])
            ->add('save', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SAM\PortfolioBundle\Entity\Certification'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sam_portfoliobundle_certification';
    }


}
