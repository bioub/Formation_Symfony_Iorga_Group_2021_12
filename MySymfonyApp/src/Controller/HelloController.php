<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index(): Response
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }

    /**
     * @Route("/bonjour/{prenom}", requirements={"prenom": "[a-zA-Z]+"})
     */
    public function bonjour($prenom): Response
    {
//        $res = new Response();
//
//        $res->setStatusCode(200);
//        $res->headers->set('Content-type', 'application/json');
//        $res->setContent(json_encode(['msg' => 'Bonjour']));
//
//        return $res;
        //return $this->json(['msg' => 'Bonjour ' . $prenom]);
        $user = new User();
        $user->setFirstName('<script></script>');
        // $user->setId(124);
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);

        return $this->render('hello/bonjour.html.twig', [
            'user' => $user,
        ]);
    }
}
