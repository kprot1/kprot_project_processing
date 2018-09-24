<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.09.2018
 * Time: 21:05
 */

namespace App\Controller;


use App\Entity\Balance\BalanceRequest;
use App\Services\BalanceCalculation\BalanceCalculationService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class BalanceController extends Controller
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
     * BalanceController constructor.
     * @param SerializerInterface $serializer
     * @param BalanceCalculationService $balanceCalculationService
     */
    public function __construct(SerializerInterface $serializer, BalanceCalculationService $balanceCalculationService)
    {
        $this->serializer = $serializer;
        $this->balanceCalculationService = $balanceCalculationService;
    }

    /**
     * @Route("/balance", name="balance", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function balanceAction(Request $request): Response
    {
        /** @var BalanceRequest $balanceRequest */
        $balanceRequest = $this->serializer->deserialize($request->getContent(), BalanceRequest::class ,'json');

        $balanceResponse = $this->balanceCalculationService->calculate($balanceRequest);

        return new Response(
            $this->serializer->serialize($balanceResponse, 'json'),
            200,
            [
                'Content-Type' => 'application/json'
            ]
        );
    }
}