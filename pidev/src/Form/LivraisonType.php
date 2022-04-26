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

            ->add('etat_livraison' ,NULL,array('label' => 'Etat de livraison', 'attr' => array('class' => 'form-control')))
            ->add('adresse' ,NULL,array('label' => 'Adresse', 'attr' => array('class' => 'form-control')))
            ->add('pays' ,NULL,array('label' => 'Pays', 'attr' => array('class' => 'form-control')))
            ->add('ville' ,NULL,array('label' => 'Ville', 'attr' => array('class' => 'form-control')))
            ->add('code_postal' ,NULL,array('label' => 'Code de postal', 'attr' => array('class' => 'form-control')))
            ->add('numero_telephone' ,NULL,array('label' => 'Numero de téléphone', 'attr' => array('class' => 'form-control')))
            ->add('commentaire' ,NULL,array('label' => 'Commentaire', 'attr' => array('class' => 'form-control')))
            ->add('frais_livraison' ,  ChoiceType::class,[
                'label' => 'METHODE DE LIVRAISON',
                'choices' => [
                    'Livraison à domicile' => true,
                    'Parking Drive' => true,

                ],

                'expanded'=>true,

            ]);


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
