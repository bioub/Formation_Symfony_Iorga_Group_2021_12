<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Manager\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /** @var UserManager */
    protected $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @Route("/users")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $this->userManager->findAll(),
        ]);
    }

    /**
     * @Route("/users/add")
     */
    public function create(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $this->userManager->insert($user);

            $this->addFlash('success', 'User added');

            return $this->redirectToRoute('app_user_index');
        }

        return $this->renderForm('user/create.html.twig', [
            'userForm' => $form,
        ]);
    }

}
