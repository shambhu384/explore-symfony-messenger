<?php

namespace App\Controller;

use App\Message\OrderCreate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Messenger\MessageBusInterface;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(MessageBusInterface $commandBus): JsonResponse
    {
        $commandBus->dispatch(new OrderCreate());
        return $this->json([
            'message' => 'ok'
        ]);
    }
}
