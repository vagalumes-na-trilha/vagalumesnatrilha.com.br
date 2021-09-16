<?php

namespace App\Controller;

use App\Repository\CarrosselRepository;
use App\Service\Contadores;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaizController extends AbstractController
{
    #[Route('/', name: 'inicio')]
    public function index(
        EntityManagerInterface $entityManager,
        Contadores $contadores
    ): Response
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
            'percorrido' => $contadores->getSomaDaDistanciaPercorrida(),
            'altitudeMaxima' => $contadores->getMaiorAltitudeMaximaEmMetros(),
            'ascendido' => $contadores->getTotalAscencaoPositivaEmMetros(),
            'eventos' => $contadores->getTotalDeEventos()
        ]);
    }
}
