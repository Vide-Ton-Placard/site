<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use App\Entity\Statut;
use App\Entity\Produit;
use App\Entity\CategorieProduit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        // CATEGORIE 0
        $catProduit0 = new CategorieProduit();
        $catProduit0->setLibelleCategorie('categorie0');

        // CATEGORIE 1
        $catProduit1 = new CategorieProduit();
        $catProduit1->setLibelleCategorie('categorie1');

        // CATEGORIE 2
        $catProduit2 = new CategorieProduit();
        $catProduit2->setLibelleCategorie('categorie2');

        // ETAT 0
        $etat0 = new Etat();
        $etat0->setLibelleEtat('etat');

        // ETAT 1
        $etat1 = new Etat();
        $etat1->setLibelleEtat('etat1');

        // ETAT 2
        $etat2 = new Etat();
        $etat2->setLibelleEtat('etat2');

        // STATUT 0
        $statut0 = new Statut();
        $statut0->setLibelleStatut('statut0');

        // STATUT 1
        $statut1 = new Statut();
        $statut1->setLibelleStatut('statut1');

        // STATUT 2
        $statut2 = new Statut();
        $statut2->setLibelleStatut('statut2');

        // PRODUIT 0
        $produit0 = new Produit();
        $produit0->setLibelleProduit('produit0');
        $produit0->setTailleProduit('XL');
        $produit0->setDescriptionProduit('Ceci est la description de mon produit');
        $produit0->setPrixProduit('1500');
        $produit0->setType('Robe');
        $produit0->setCategorie($catProduit2);
        $produit0->setEtat($etat1);
        $produit0->setStatut($statut0);

        // PRODUIT 1
        $produit1 = new Produit();
        $produit1->setLibelleProduit('produit1');
        $produit1->setTailleProduit('L');
        $produit1->setDescriptionProduit('Ceci est la description de mon produit');
        $produit1->setPrixProduit('1500');
        $produit1->setType('Pantalon');
        $produit1->setCategorie($catProduit1);
        $produit1->setEtat($etat0);
        $produit1->setStatut($statut1);

        // PRODUIT 2
        $produit2 = new Produit();
        $produit2->setLibelleProduit('produit2');
        $produit2->setTailleProduit('M');
        $produit2->setDescriptionProduit('Ceci est la description de mon produit');
        $produit2->setPrixProduit('5000');
        $produit2->setType('Jupe');
        $produit2->setCategorie($catProduit2);
        $produit2->setEtat($etat2);
        $produit2->setStatut( $statut0);

        // PRODUIT 3
        $produit3 = new Produit();
        $produit3->setLibelleProduit('produit3');
        $produit3->setTailleProduit('XXL');
        $produit3->setDescriptionProduit('Ceci est la description de mon produit');
        $produit3->setPrixProduit('1500');
        $produit3->setType('Chaussures');
        $produit3->setCategorie($catProduit0);
        $produit3->setEtat($etat1);
        $produit3->setStatut($statut2);

        // PERSIST DATA
        $manager->persist($produit0);
        $manager->persist($produit1);
        $manager->persist($produit2);
        $manager->persist($produit3);
    
        $manager->persist($catProduit0);
        $manager->persist($catProduit1);
        $manager->persist($catProduit2);

        $manager->persist($etat0);
        $manager->persist($etat1);
        $manager->persist($etat2);

        $manager->persist($statut0);
        $manager->persist($statut1);
        $manager->persist($statut2);

        // Empty objects inserted in Database
        $manager->flush();
    }
}
