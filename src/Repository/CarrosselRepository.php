<?php

namespace App\Repository;

use App\Entity\Carrossel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Carrossel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carrossel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carrossel[]    findAll()
 * @method Carrossel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarrosselRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carrossel::class);
    }

    // /**
    //  * @return Carrossel[] Returns an array of Carrossel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Carrossel
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
