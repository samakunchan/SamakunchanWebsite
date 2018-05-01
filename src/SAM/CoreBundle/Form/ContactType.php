<?php

namespace SAM\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',  TextType::class, ['required'=>false])
            ->add('company',  TextType::class, ['required'=>false])
            ->add('email',  TextType::class, ['required'=>false])
            ->add('phone', TextType::class, ['required'=>false])
            ->add('subject',  TextType::class, ['required'=>false])
            ->add('message',  TextareaType::class, ['required'=>false])
            ->add('envoyer', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SAM\CoreBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sam_corebundle_contact';
    }


}
