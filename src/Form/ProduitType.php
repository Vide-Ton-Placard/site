<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\Statut;
use App\Entity\Produit;
use App\Entity\CategorieProduit;
use App\Repository\EtatRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitType extends AbstractType
{   
    // public function __construct(EtatRepository $etatRepository)
    // {
    //    // dd($etatRepository-> findAll());
    //     $this->etatRepository = $etatRepository;
    // }

    // public function getAllEtat()
    // {
    //     $libelle_etat =[];
       
    //     foreach ($this->etatRepository->findAll() as $etat){
    //         $libelle_etat[$etat->getLibelleEtat()] = $etat->getLibelleEtat();
    //     }
       
    //     return $libelle_etat;

    // }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', EntityType::class, [
                 'class' => CategorieProduit::class,
                 'choice_label' => 'libelle_categorie', 
                 'attr' => ['class' => 'form-control'],
                 'placeholder'=>'Cartégorie'
            ]) 
            ->add('type', TextType::class,[
                'label' => 'Type de produit',
                'attr' => ['class' => 'form-control'],
                'label' =>'Type de produit'
            ])
            ->add('taille_produit', TextType::class, [
                'label' => 'Taille',
                'attr' => ['class' => 'form-control'],
  
            ])
            ->add('etat', EntityType::class, [
                'class' => Etat::class,
                'choice_label' => 'libelle_etat',
                'attr' => ['class' => 'form-control'],
                'label' => 'Etat'
                ])
            ->add('libelle_produit', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => ['class' => 'form-control'],
                
            ])
            ->add('description_produit', TextType::class, [
                'label' => 'Détail',
                'attr' => ['class' => 'form-control'],
                
            ])
            ->add('prix_produit', TextType::class, [
                'label' => 'Prix',
                'attr' => ['class' => 'form-control']
            ])
            ->add('statut', EntityType::class, [
                'class' => Statut::class, 
                'choice_label' => 'libelle_statut',
                'attr' => ['class' => 'form-control']               
            ]) ;
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
