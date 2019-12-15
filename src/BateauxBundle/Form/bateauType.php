<?php

namespace BateauxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class bateauType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('marquebateau')->add('longueurcoquebateau')->add('longueurflottaisonbateau')->add('largeurmaxibateau')->add('tirantairbateau')->add('tiranteauminbateau')->add('typecoquebateau')->add('anneebateau')->add('deplacementlegebateau')->add('idlocation');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BateauxBundle\Entity\bateau'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bateauxbundle_bateau';
    }


}
