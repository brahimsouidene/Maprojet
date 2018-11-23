<?php

namespace IsetRades\GestionColisBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColisType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('codeColis', TextType::class)
                ->add('prixPayer', MoneyType::class, array(
                    'scale' => 2,
                    'currency' => false,
                ))
                ->add('poids', IntegerType::class)
                ->add('dateCreation', DateType::class, array(
                    'widget' => 'choice',
                ))
                ->add('etat', ChoiceType::class, array(
                    'choices' => array(
                        '' => true,
                        'Avisée' => false,
                        'Livrée' => false,
                        'adresse nexiste pas' => false,
                        'adresse incomplete' => false,
                    )
                        )
                )
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'IsetRades\GestionColisBundle\Entity\Colis'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'isetrades_gestioncolisbundle_colis';
    }

}
