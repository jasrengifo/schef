<?php

namespace App\Repository;

use App\Entity\RecipeImages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RecipeImages|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecipeImages|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecipeImages[]    findAll()
 * @method RecipeImages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecipeImagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecipeImages::class);
    }

    // /**
    //  * @return RecipeImages[] Returns an array of RecipeImages objects
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
    public function findOneBySomeField($value): ?RecipeImages
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
