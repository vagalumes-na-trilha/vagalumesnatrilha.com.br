<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class Contadores
{
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getSomaDaDistanciaPercorrida()
    {
        $dql = "SELECT SUM(t.distanciaEmMetros) AS distanciaTotalEmMetros FROM App\Entity\Trilha t";

        $distanciaTotalEmMetros = $this->entityManager->createQuery($dql)->getSingleScalarResult();

        return round($distanciaTotalEmMetros/1000, 0);
    }

    public function getMaiorAltitudeMaximaEmMetros()
    {
        $dql = "SELECT MAX(t.altitudeMaximaEmMetros) AS maiorAltitudeMaximaEmMetros FROM App\Entity\Trilha t";

        $altitudeMaximaEmMetros = $this->entityManager->createQuery($dql)->getSingleScalarResult();

        return $altitudeMaximaEmMetros;
    }

    public function getTotalAscencaoPositivaEmMetros()
    {
        $dql = "SELECT SUM(t.ascencaoPositivaEmMetros) AS totalDeAscencaoPositivaEmMetros FROM App\Entity\Trilha t";

        $ascencaoEmMetros = $this->entityManager->createQuery($dql)->getSingleScalarResult();

        return $ascencaoEmMetros;
    }

    public function getTotalDeEventos()
    {
        $dql = "SELECT count(t.ascencaoPositivaEmMetros) AS totalDeEventos FROM App\Entity\Trilha t";

        $totalDeEventos = $this->entityManager->createQuery($dql)->getSingleScalarResult();

        return $totalDeEventos;
    }
}
