<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    /**
     * @Route("/test", name="test", methods={"GET"})
     */
    public function test()
    {
        return new JsonResponse(['foo' => 'bar']);
    }
}
