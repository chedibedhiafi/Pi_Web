<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('login' ,NULL,array('label' => 'Login', 'attr' => array('class' => 'form-control')))
            ->add('mdp' ,NULL,array('label' => 'Mot de passe', 'attr' => array('class' => 'form-control')))
            ->add('dateNaissance' ,NULL,array('label' => 'Date de naissance'))
            ->add('nom' ,NULL,array('label' => 'Nom', 'attr' => array('class' => 'form-control')))
            ->add('prenom' ,NULL,array('label' => 'Prenom', 'attr' => array('class' => 'form-control')))
            ->add('email',NULL ,array('label' => 'Email', 'attr' => array('class' => 'form-control')))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
