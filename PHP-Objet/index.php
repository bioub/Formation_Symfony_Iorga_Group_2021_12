<?php

// use Iorga\Entity\UserController as EntityUser;
use Iorga\Entity\User;

include_once 'autoload.php';

// \Iorga\Entity\UserController : FQN ou FQCN
// Fully Qualified Class Name
// $user = new \Iorga\Entity\UserController();

$user = new User();
$user->setFirstName('Romain')->setLastName('Bohdanowicz');

echo $user->getFirstName() . "\n";
echo $user->getLastName() . "\n";
