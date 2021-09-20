<?php

namespace App\Repository;

use App\Entity\UserRols;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserRols|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRols|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRols[]    findAll()
 * @method UserRols[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRolsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRols::class);
    }

    // /**
    //  * @return UserRols[] Returns an array of UserRols objects
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
    public function findOneBySomeField($value): ?UserRols
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
