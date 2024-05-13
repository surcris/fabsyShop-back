<?php

namespace App\Controller;
use Symfony\Component\Serializer\SerializerInterface;
use App\Repository\UserRepository;
use App\Controller\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('api/users', name: 'app_user')]
    public function getAllUsers(UserRepository $userRepo, SerializerInterface $serializer): JsonResponse
    {
        $users = $userRepo->findAll();

        $jsonBookList = $serializer->serialize($users, 'json');
        return new JsonResponse($jsonBookList, JsonResponse::HTTP_OK, [], true);
    }
}
