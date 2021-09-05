<?php

namespace App\Controller\Admin;

use App\Repository\CarrosselRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/adm/carrossel/desativar', name: 'admin_carrossel_desativar')]
    public function desativarCarrossel(CarrosselRepository $carrosselRepository, EntityManagerInterface $entityManager, Request $request): Response
    {
        $carrossel = $request->request->all('carrossel');

        $carrossel = $carrosselRepository->find($carrossel['id']);

        $carrossel->setDatahoraFim(new \DateTime('now'));

        $entityManager->persist($carrossel);

        $entityManager->flush();

        return $this->redirectToRoute('admin_carrossel');
    }
}
