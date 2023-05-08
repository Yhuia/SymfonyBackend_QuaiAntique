<?php

namespace App\Repository;

use App\Entity\JourDeLaSemaine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JourDeLaSemaine>
 *
 * @method JourDeLaSemaine|null find($id, $lockMode = null, $lockVersion = null)
 * @method JourDeLaSemaine|null findOneBy(array $criteria, array $orderBy = null)
 * @method JourDeLaSemaine[]    findAll()
 * @method JourDeLaSemaine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JourDeLaSemaineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JourDeLaSemaine::class);
    }

    public function save(JourDeLaSemaine $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(JourDeLaSemaine $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return JourDeLaSemaine[] Returns an array of JourDeLaSemaine objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?JourDeLaSemaine
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
