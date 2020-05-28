<?php

namespace App\Repository;

use App\Entity\Micropousse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Micropousse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Micropousse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Micropousse[]    findAll()
 * @method Micropousse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MicropousseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Micropousse::class);
    }

    // /**
    //  * @return Micropousse[] Returns an array of Micropousse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Micropousse
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
