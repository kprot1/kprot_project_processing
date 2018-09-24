<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.09.2018
 * Time: 21:10
 */

namespace App\Entity\Balance;


/**
 * Class BalanceRequest
 * @package App\Entity\Balance
 */
class BalanceRequest
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $cardNumber;

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
}