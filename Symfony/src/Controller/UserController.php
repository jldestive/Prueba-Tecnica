<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Util\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{   
    private EntityManagerInterface $entityManagerInterface;
    private SerializerInterface $serializerInterface;

    public function __construct(entityManagerInterface $entityManagerInterface, SerializerInterface $serializerInterface){
        $this->entityManagerInterface = $entityManagerInterface;
        $this->serializerInterface = $serializerInterface;
    } 

    #[Route('api/user', name: 'user_store', methods: ['POST'])]
    public function new(Request $request, ): Response {
        $data = json_decode($request->getContent(), true);

        $user = new User();
        
        $form = $this->createForm(UserType::class, $user);
        $form->submit($data);

        if (!$form->isValid()) {
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }

            return new JsonResponse(['error' => $errors], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user->setUsername($data['username']);
        $user->setEmail($data['email']);
        
        $this->entityManagerInterface->persist($user);
        $this->entityManagerInterface->flush();

        $userJson = $this->serializerInterface->serialize($user, 'json', ['groups' => 'user:read']);
        
        return new JsonResponse(['user' => json_decode($userJson), 'message' => 'User created successfully'], Response::HTTP_CREATED);       
    }
}
