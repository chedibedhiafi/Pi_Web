<?php

namespace App\Form;

use App\Entity\Livraison;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('addresse')
            ->add('codepostal')
            ->add('ville')
            ->add('tel')
            ->add('commentaire')
            ->add('methode' ,  ChoiceType::class,[
                'label' => 'METHODE DE LIVRAISON',
                'choices' => [
                    'Parking Drive' => true,
                    'Livraison à domicile' => true,


                ],

                'expanded'=>true,

            ])



        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);

}}
