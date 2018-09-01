<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 24.08.2018
 * Time: 19:01
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProcessingController extends Controller
{
    /**
     *
     *
     * @Route("/purchaseCalculation", name="purchase_calculation")
     */
    public function purchaseCalculationAction()
    {
        return new Response('hoba-oba');
    }
}
