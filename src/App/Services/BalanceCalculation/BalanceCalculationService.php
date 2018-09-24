<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.09.2018
 * Time: 21:11
 */

namespace App\Services\BalanceCalculation;


use App\Constants\ExceptionError;
use App\Entity\Balance\BalanceExceptionResponse;
use App\Entity\Balance\BalanceRequest;
use App\Entity\Balance\BalanceResponse;
use App\Entity\Card\Card;
use App\Repository\Card\CardRepository;

class BalanceCalculationService
{
    /** @var CardRepository */
    private $cardRepository;

    /**
     * BalanceCalculationService constructor.
     * @param CardRepository $cardRepository
     */
    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    /**
     * @param BalanceRequest $balanceRequest
     * @return BalanceExceptionResponse|BalanceResponse
     */
    public function calculate(BalanceRequest $balanceRequest)
    {
        /** @var Card|null $card */
        $card = $this->cardRepository->findByNumber($balanceRequest->getCardNumber());

        if ($card instanceof Card) {
            return new BalanceResponse($card->getNumber());
        }

        return new BalanceExceptionResponse('Карта не найдена', ExceptionError::CARD_NOT_FOUND_EXCEPTION);
    }
}