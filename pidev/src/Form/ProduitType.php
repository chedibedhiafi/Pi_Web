<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Classroom;
use App\Entity\Produits;
use App\Entity\Promotion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prix')
            ->add('description',TextareaType::class)
            ->add('profit')
            ->add('idPromotion',EntityType::class,[
                'class'=>Promotion::class,
                'choice_label'=>'percentage'
            ])
            ->add('idCategorie', EntityType::class,[
            'class'=>Categorie::class,
                'choice_label'=>'nom'])
            ->add('imageFile',VichImageType::class,array('data_class' => null),['label'=>'insert image'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produits::class,
        ]);
    }
}
