<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom' ,TextType::class,array('label' => 'Nom', 'attr' => array('class' => 'form-control','placeholder' => 'Nom')))
            ->add('prenom' ,TextType::class,array('label' => 'Prenom', 'attr' => array('class' => 'form-control','placeholder' => 'Prenom')))
            ->add('username' ,TextType::class,array('label' => 'Login', 'attr' => array('class' => 'form-control','placeholder' => 'Login')))
            ->add('password' ,PasswordType::class,array('label' => 'Mot de passe', 'attr' => array('class' => 'form-control','placeholder' => 'Mot de passe')))
            ->add('mdpC',PasswordType::class,array('label' => 'Confirmation du mot de passe', 'attr' => array('class' => 'form-control','placeholder' => 'Veuillez confirmer le mot de passe')))
            ->add('dateNaissance' ,DateType::class,array('label' => 'Date de naissance','widget' => 'single_text'))
            ->add('email',TextType::class ,array('label' => 'Email', 'attr' => array('class' => 'form-control','placeholder' => 'Email')))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
