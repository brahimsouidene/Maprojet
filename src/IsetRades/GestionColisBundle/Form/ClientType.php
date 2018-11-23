<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientType
 *
 * @author ASUS
 */

namespace IsetRades\GestionColisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ClientType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('Cin', TextType::class)
                ->add('Nom', TextType::class)
                ->add('Prenom', TextType::class)
                ->add('Adresse', TextType::class)
                ->add('TypeClient', ChoiceType::class, array(
                    'choices' => array(
                        'Emetteur' => false,
                        'Recepteur' => false,
                    )
                        )
                )
                ->add('CodePostale',TextType::class)
               // ->add('codeColis', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'IsetRades\GestionColisBundle\Entity\Client'
                )
        );
    }

    public function getBlockPrefix() {
        return 'isetrades_gestioncolisbundle_client';
    }

}
