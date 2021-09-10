<?php

namespace App\Controller;

use App\Repository\CarrosselRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaizController extends AbstractController
{
    #[Route('/', name: 'inicio')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery(
            'SELECT c FROM App\Entity\Carrossel c WHERE 
            c.datahoraInicio <= ?1 AND
            c.datahoraFim is null'
        );

        $query->setParameter(1, new \DateTime());

        $carrossel = $query->getResult();

        return $this->render('raiz/index.html.twig', [
            'carrossel' => $carrossel,
            'percorrido' => 25,
            'altitudeMaxima' => 1350,
            'ascendido' => 2000,
            'eventos' => 7
        ]);
    }
}
