<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @OA\Info(title="My API", version="0.1")
*/

/**
 * @Route("/api")
 */
class TestController extends AbstractController
{
    /**
          * @Route("/test", methods={"GET"})
          * @OA\Get(
          *     path="/api/test",
          *     tags={"endpoint test"},
          *     @OA\Response(
          *         response="200",
          *         description="message"
          *     )
          * )
          */
    public function index(): Response
    {
        return $this->json([
            'message' => 'test'
        ])
    }
}
