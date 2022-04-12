<?php

namespace App\Form;

use App\Entity\Pointdevente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PointdeventeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name' ,NULL,array('label' => 'Nom', 'attr' => array('class' => 'form-control')))
            ->add('proprietaire' ,NULL,array('label' => 'Proprietaire', 'attr' => array('class' => 'form-control')))
            ->add('adresse' ,NULL,array('label' => 'Adresse', 'attr' => array('class' => 'form-control')))
            ->add('dateOuverture' ,NULL,array('label' => 'Date Ouverture', 'attr' => array('class' => 'form-control')))
            ->add('longitude' ,NULL,array('label' => 'Longitude', 'attr' => array('class' => 'form-control')))
            ->add('latitude' ,NULL,array('label' => 'Latitude', 'attr' => array('class' => 'form-control')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pointdevente::class,
        ]);
    }
}
