<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaizController extends AbstractController
{
    #[Route('/', name: 'inicio')]
    public function index(): Response
    {

        return $this->render('raiz/index.html.twig', [
            'menu' => 'RaizController',
        ]);
    }
}
