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

            ->add('date_creation' ,NULL,array('label' => 'Date de creation'))
            ->add('date_envoie' ,NULL,array('label' => 'Date d`envoie'))
            ->add('total' ,NULL,array('label' => 'Total', 'attr' => array('class' => 'form-control')))
            ->add('tva' ,NULL,array('label' => 'Tva', 'attr' => array('class' => 'form-control')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
