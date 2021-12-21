<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use App\Entity\Recette;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $user = new User();
        $user->setFirstName('Romain');
        $manager->persist($user);

        $recette = new Recette();
        $recette->setTitre('Soupe au porc');
        $recette->setAuthor($user);
        $manager->persist($recette);

        $user = new User();
        $user->setFirstName('Jérémy');
        $manager->persist($user);

        $recette = new Recette();
        $recette->setTitre('Barbecue coréen');
        $recette->setAuthor($user);
        $manager->persist($recette);

        $livre = new Livre();
        $livre->setTitre('ABC');
        $manager->persist($livre);

        $livre = new Livre();
        $livre->setTitre('XYZ');
        $manager->persist($livre);

        $manager->flush();


    }
}
