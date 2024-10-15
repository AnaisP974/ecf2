<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RoomController extends AbstractController
{
    #[Route('/room', name: 'app_room')]
    public function index(): Response
    {
        return $this->render('room/index.html.twig', [
            'controller_name' => 'RoomController',
        ]);
    }


    #[Route('/room/show', name: 'app_room_show')]
    public function show(): Response
    {
        return $this->render('room/show.html.twig', [
            'controller_name' => 'RoomController',
        ]);
    }
}