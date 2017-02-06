<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class HelloController extends Controller
{
    /**
     * @Route("/hello/{name}")
     *
     * @param $name
     * @return JsonResponse
     */
    public function helloAction($name)
    {
        return new JsonResponse([
            'message' => 'Hello ' . $name
        ]);
    }
}
