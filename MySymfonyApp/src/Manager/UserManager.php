<?php

namespace App\Manager;

use App\Entity\User;

class UserManager
{
    /** @var \Doctrine\Persistence\ManagerRegistry */
    protected $doctrine;

    public function __construct(\Doctrine\Persistence\ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function findAll() {
        $repo = $this->doctrine->getRepository(User::class);

        return $repo->findBy([], [], 100);
    }

    public function findById($id) {
        $repo = $this->doctrine->getRepository(User::class);

        return $repo->find($id);
    }

    public function insert(User $user) {
        $manager = $this->doctrine->getManager();

        $manager->persist($user);
        $manager->flush();
    }
}