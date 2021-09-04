<?php

namespace App\Controller\Admin;

use App\Repository\CarrosselRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarrosselController extends AbstractController
{
    #[Route('/adm/carrossel', name: 'admin_carrossel')]
    public function index(CarrosselRepository $carrosselRepository): Response
    {
        $carrossel = $carrosselRepository->findAll();

        return $this->render('admin/carrossel/index.html.twig', [
            'carrossel' => $carrossel
        ]);
    }
}
