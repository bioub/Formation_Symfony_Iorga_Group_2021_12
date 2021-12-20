<?php

namespace Iorga\Controller;

use Iorga\Repository\UserRepository;

class UserController
{
    /** @var UserRepository */
    protected $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function list() {
        $repo = $this->userRepository;
        $users = $repo->findAll();


    }
}