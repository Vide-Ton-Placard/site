<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/profil")
 */
class ProfileController extends AbstractController
{
    /**
     * @Route("", name="profil", methods={"GET"})
     */
    public function show()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();

        $produits =  $this->getDoctrine()->getRepository(Produit::class)->findBy(
            array(
                'user' => $this->getUser()
            )
        );

        return $this->render('profile/show.html.twig', [
            'user' => $user,
            'produits' => $produits
        ]);
    }
}

