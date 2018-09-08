<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.09.2018
 * Time: 12:48
 */

namespace App\Controller;


use App\Services\BalanceCalculationService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class MyController
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var BalanceCalculationService
     */
    private $balanceCalculationService;

    /**
     * MyController constructor.
     * @param SerializerInterface $serializer
     * @param BalanceCalculationService $balanceCalculationService
     */
    public function __construct(SerializerInterface $serializer, BalanceCalculationService $balanceCalculationService)
    {
        $this->serializer = $serializer;
        $this->balanceCalculationService = $balanceCalculationService;
    }

    /**
     * @Route("/my", name="my_action")
     */
    public function myAction(): Response
    {
        return new Response('my_controller');
    }
}