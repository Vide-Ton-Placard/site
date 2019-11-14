<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response(
            '<html><body>Welcome to Vide Ton Placard</body></html>'
        );
    }
}