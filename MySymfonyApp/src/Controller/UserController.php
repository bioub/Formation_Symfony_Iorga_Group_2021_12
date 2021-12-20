<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(User::class);

        return $this->render('user/index.html.twig', [
            'users' => $repo->findAll(),
        ]);
    }

}
