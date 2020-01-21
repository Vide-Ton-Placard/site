<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\Statut;
use App\Entity\Produit;
use App\Entity\CategorieProduit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', EntityType::class, ['class' => CategorieProduit::class, 'choice_label' => 'libelle_categorie', 'attr' => ['class' => 'mb-3']]) 
            ->add('type', TextType::class, ['label' => 'Type de produit'])
            ->add('taille_produit', TextType::class, ['label' => 'Taille'])
            ->add('etat', EntityType::class, ['class' => Etat::class, 'choice_label' => 'libelle_etat', ],['label' => 'Etat']) 
            ->add('libelle_produit', TextType::class, ['label' => 'Nom du produit'])
            ->add('description_produit', TextType::class, ['label' => 'Détail'])
            ->add('prix_produit', TextType::class, ['label' => 'Prix'])
            ->add('statut', EntityType::class, ['class' => Statut::class, 'choice_label' => 'libelle_statut', ],['label' => 'Statut']) 
            //->add('submit', SubmitType::class, [
               // 'attr' => ['class' => 'btn btn-info'],
            //    ]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
