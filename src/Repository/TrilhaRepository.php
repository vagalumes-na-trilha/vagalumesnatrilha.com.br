<?php

namespace App\Repository;

use App\Entity\Trilha;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trilha|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trilha|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trilha[]    findAll()
 * @method Trilha[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrilhaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trilha::class);
    }

    // /**
    //  * @return Trilha[] Returns an array of Trilha objects
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
    public function findOneBySomeField($value): ?Trilha
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
