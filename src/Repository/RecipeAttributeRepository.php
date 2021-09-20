<?php

namespace App\Repository;

use App\Entity\RecipeAttribute;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RecipeAttribute|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecipeAttribute|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecipeAttribute[]    findAll()
 * @method RecipeAttribute[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeAttributeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecipeAttribute::class);
    }

    // /**
    //  * @return RecipeAttribute[] Returns an array of RecipeAttribute objects
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
    public function findOneBySomeField($value): ?RecipeAttribute
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
