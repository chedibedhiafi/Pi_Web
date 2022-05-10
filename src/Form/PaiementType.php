<?php

namespace App\Form;

use App\Entity\Paiement;
use App\Entity\Produitcommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            ->add('modePayment',ChoiceType::class,[  'label' => 'MODE DE PAIEMENT',
                'choices'=>[
                    ' Chèque / Mandat'=>'Chèque / Mandat',
                    'Paiement à la livraison'=>'Paiement à la livraison',
                    ' Paiment par carte bancaire'=>' Paiment par carte bancaire',
                ],

                'expanded'=>true,
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
        ]);
    }
}
