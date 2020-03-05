<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Etat;
use App\Entity\User;
use App\Entity\Statut;
use App\Entity\Produit;
use App\Entity\TypeProduit;
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

        // // CATEGORIE 1
        $catProduit1 = new CategorieProduit();
        $catProduit1->setLibelleCategorie('categorie1');

        // // CATEGORIE 2
        $catProduit2 = new CategorieProduit();
        $catProduit2->setLibelleCategorie('categorie2');

        // TYPE 0
        $type0 = new TypeProduit();
        $type0->setLibelle('haut');

        //TYPE 1
        $type1 = new TypeProduit();
        $type1->setLibelle('Jupe');

        // // TYPE 2
        $type2 = new TypeProduit();
        $type2->setLibelle('Chaussures');

        // ETAT 0
        $etat0 = new Etat();
        $etat0->setLibelleEtat('etat');

        // // ETAT 1
        $etat1 = new Etat();
        $etat1->setLibelleEtat('etat1');

        // // ETAT 2
        $etat2 = new Etat();
        $etat2->setLibelleEtat('etat2');

        // STATUT 0
        $statut0 = new Statut();
        $statut0->setLibelleStatut('statut0');

        // // STATUT 1
        $statut1 = new Statut();
        $statut1->setLibelleStatut('statut1');

        // // STATUT 2
        $statut2 = new Statut();
        $statut2->setLibelleStatut('statut2');

        // USER 0
        $user0 = new User();
        $user0->setUsername('user0@gmail.com');
        $user0->setPassword( "1234");
        $user0->setRoles(["ROLE_USER"]);
        $user0->setNom( "gayon");
        $user0->setTel(15478547);
        $user0->setPrenom( "sarah");
       

        // PRODUIT 0
        $produit0 = new Produit();
        $produit0->setLibelleProduit('produit0');
        $produit0->setTailleProduit('XL');
        $produit0->setDescriptionProduit('Ceci est la description de mon produit');
        $produit0->setPrixProduit('1500');
        $produit0->setDateAjout(new \DateTime('2020-03-01T14:00:00'));
        $produit0->setCategorie($catProduit0);
        $produit0->setType($type0);
        $produit0->setUser($user0);
        $produit0->setEtat($etat0);
        $produit0->setStatut($statut0);

        // // // PRODUIT 1
        $produit1 = new Produit();
        $produit1->setLibelleProduit('produit1');
        $produit1->setTailleProduit('XL');
        $produit1->setDescriptionProduit('Ceci est la description de mon produit');
        $produit1->setPrixProduit('1500');
        $produit1->setDateAjout(new \DateTime('2020-03-01T14:00:00'));
        $produit1->setCategorie($catProduit1);
        $produit1->setType($type0);
        $produit1->setUser($user0);
        $produit1->setEtat($etat0);
        $produit1->setStatut($statut0);
        
       
        // // PRODUIT 2
        $produit2 = new Produit();
        $produit2->setLibelleProduit('produit2');
        $produit2->setTailleProduit('M');
        $produit2->setDescriptionProduit('Ceci est la description de mon produit');
        $produit2->setPrixProduit('5000');
        $produit2->setDateAjout(new \DateTime('2020-03-01T14:00:00'));
        $produit2->setCategorie($catProduit2);
        $produit2->setType($type1);
        $produit2->setUser($user0);
        $produit2->setEtat($etat1);
        $produit2->setStatut($statut0);

    
        // PERSIST DATA
        $manager->persist($produit0);
        $manager->persist($produit1);
        $manager->persist($produit2);
    
        $manager->persist($catProduit0);
        $manager->persist($catProduit1);
        $manager->persist($catProduit2);

        $manager->persist($type0);
        $manager->persist($type1);
        $manager->persist($type2);

        $manager->persist($etat0);
        $manager->persist($etat1);
        $manager->persist($etat2);

        $manager->persist($user0);

        $manager->persist($statut0);
        $manager->persist($statut1);
        $manager->persist($statut2);

        // Empty objects inserted in Database
        $manager->flush();
    }
}
