<?php

namespace App\Repository\Card;

use App\Entity\Card\Card;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * CardRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class CardRepository extends ServiceEntityRepository
{
    /**
     * CardRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Card::class);
    }

    /**
     * @param string $cardNumber
     * @return Card|null
     */
    public function findByNumber(string $cardNumber): ?Card
    {
        return $this->findOneBy(['number' => $cardNumber]);
    }
}
