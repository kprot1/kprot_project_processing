<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 24.09.2018
 * Time: 18:00
 */

namespace App\Entity\Balance;

/**
 * Class BalanceExceptionResponse
 * @package App\Entity\Balance
 */
class BalanceExceptionResponse
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $code;

    /**
     * BalanceExceptionResponse constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct(string $message, int $code)
    {
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }
}