<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $produits = $this->getDoctrine()->getRepository(Produit::class)->findBy(array(), array(), 6, null);

        return $this->render('pages/home.html.twig', [
            'produits' => $produits,
            'controller_name' => 'HomeController',
        ]);
    }
}
