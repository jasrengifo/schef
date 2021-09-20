<?php

namespace App\Repository;

use App\Entity\RecipeAttributes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RecipeAttributes|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecipeAttributes|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecipeAttributes[]    findAll()
 * @method RecipeAttributes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeAttributesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecipeAttributes::class);
    }

    // /**
    //  * @return RecipeAttributes[] Returns an array of RecipeAttributes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RecipeAttributes
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
