<?php
/**
 * Created by PhpStorm.
 * User: tutyo
 * Date: 08.09.2018
 * Time: 12:48
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController
{
    /**
     * @Route("/my", name="my_action")
     */
    public function myAction(): Response
    {
        return new Response('my_controller');
    }
}