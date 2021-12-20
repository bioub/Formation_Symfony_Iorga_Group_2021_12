<?php

namespace App\Controller;

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
        return $this->render('recette/index.html.twig', [
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
    public function details(): Response
    {
        return $this->render('recette/details.html.twig', [
        ]);
    }

}
