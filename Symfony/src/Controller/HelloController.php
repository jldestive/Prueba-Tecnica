<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_hello', methods: ['GET'])]
    public function hello($name = null): Response {
        if(is_null($name)){
            $name = 'World';
        }

        return $this->json([
            'message' => 'Hello ' . $name,
        ]);
    }
}
