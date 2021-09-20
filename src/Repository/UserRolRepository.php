<?php

namespace App\Repository;

use App\Entity\UserRol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserRol|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRol|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRol[]    findAll()
 * @method UserRol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRol::class);
    }

    // /**
    //  * @return UserRol[] Returns an array of UserRol objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserRol
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
