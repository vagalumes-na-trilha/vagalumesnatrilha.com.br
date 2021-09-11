<?php

namespace App\Repository;

use App\Entity\TipoDeObjetivo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TipoDeObjetivo|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoDeObjetivo|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoDeObjetivo[]    findAll()
 * @method TipoDeObjetivo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoDeObjetivoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoDeObjetivo::class);
    }

    // /**
    //  * @return TipoDeObjetivo[] Returns an array of TipoDeObjetivo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoDeObjetivo
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
