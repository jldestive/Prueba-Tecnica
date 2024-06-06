<?php

namespace App\Controller;

use App\Service\MathService;
use Doctrine\ORM\Query\Expr\Math;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MathController extends AbstractController
{
    private MathService $mathService;
    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    #[Route('/add', name: 'app_add', methods: ['GET'])]
    public function add(Request $request): Response {
        return $this->json([
            'result' => $this->mathService->add($request->query->get('a'), $request->query->get('b')),
        ]);
    }
}
