<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CheckerIndexFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('spamMessages', ChoiceType::class, [
                'choices' => $options['ids'],
                'choice_label' => false,
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('noSpamMessages', ChoiceType::class, [
                'choices' => $options['ids'],
                'choice_label' => false,
                'expanded' => true,
                'multiple' => true,
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'ids' => [],
        ]);
    }
}
