<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            ->add('nom' ,NULL,array('label' => 'Nom', 'attr' => array('class' => 'form-control')))
            ->add('prenom' ,NULL,array('label' => 'Prenom', 'attr' => array('class' => 'form-control')))
            ->add( 'email', NULL,array('label' => 'Email', 'attr' => array('class' => 'form-control')))
            ->add('addresse' ,NULL,array('label' => 'Addresse', 'attr' => array('class' => 'form-control')))
            ->add('telephone' ,NULL,array('label' => 'Numero de telephone', 'attr' => array('class' => 'form-control')))


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
