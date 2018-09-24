<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.09.2018
 * Time: 21:10
 */

namespace App\Entity\Balance;

class BalanceResponse
{
    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * BalanceResponse constructor.
     * @param string $cardNumber
     */
    public function __construct(string $cardNumber)
    {
        $this->cardNumber = $cardNumber;
        $this->date = new \DateTime();
    }

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }
}