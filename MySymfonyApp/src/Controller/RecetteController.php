<?php

namespace App\Controller;

use App\Entity\Recette;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/recettes")
 */
class RecetteController extends AbstractController
{
    /**
     * @Route(methods={"GET"})
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Recette::class);

        return $this->render('recette/index.html.twig', [
            'recettes' => $repo->findBy([], [], 100),
        ]);
    }

    /**
     * @Route("/ajouter", methods={"GET","POST"})
     */
    public function ajouter(): Response
    {
        return $this->render('recette/ajouter.html.twig', [
        ]);
    }

    /**
     * @Route("/{id}", methods={"GET"}, requirements={"id":"[1-9]\d*"})
     */
    public function details(Recette $recette): Response
    {
        return $this->render('recette/details.html.twig', [
            'recette' => $recette
        ]);
    }
//    public function details($id): Response
//    {
//        $repo = $this->getDoctrine()->getRepository(Recette::class);
//
//        return $this->render('recette/details.html.twig', [
//            'recette' => $repo->find($id)
//        ]);
//    }

}
