<?php

namespace App\Repository;

use App\Entity\AcomodacionHabitacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AcomodacionHabitacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcomodacionHabitacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcomodacionHabitacion[]    findAll()
 * @method AcomodacionHabitacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcomodacionHabitacionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AcomodacionHabitacion::class);
    }

    // /**
    //  * @return AcomodacionHabitacion[] Returns an array of AcomodacionHabitacion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AcomodacionHabitacion
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
