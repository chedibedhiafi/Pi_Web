<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Produits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produits|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produits|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produits[]    findAll()
 * @method Produits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produits::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Produits $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Produits $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return Produits[]
     */
    public function findSearch(SearchData $search):array{
        $query =$this
            ->createQueryBuilder('p')
            ->select('c','p')
           ->join('p.idCategorie','c');
        if (!empty($search->q)){

            $query =$query
                ->andWhere('p.nom LIKE :q')
                ->setParameter('q',"%{$search->q}%");
        }
        if(!empty($search->min)){

            $query =$query
                ->andWhere('p.prixfinale >= :min')
                ->setParameter('min',$search->min);
        }
        if(!empty($search->max)){

            $query =$query
                ->andWhere('p.prixfinale <= :max')
                ->setParameter('max',$search->max);
        }
        if(!empty($search->categories)){

           $query =$query
                ->andWhere('c.id IN (:categories)')
                ->setParameter('categories',$search->categories);
       }


        return $query->getQuery()->getResult();


    }
    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM App\Entity\Produits p
                WHERE p.nom LIKE :str 
                OR p.profit LIKE :str  
                OR p.prix LIKE :str  
                OR p.prixfinale LIKE :str  
                OR p.description LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }

    // /**
    //  * @return Produits[] Returns an array of Produits objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produits
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
