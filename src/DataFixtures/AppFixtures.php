<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\Formation;
use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $now = new DateTimeImmutable();;
    //    for ($i=0; $i < 3; $i++) { 
    //     $formation = new Formation();
    //     $formation->setNom("Formation" . $i);
    //     $formation->setPresentation("pres" . $i);
    //     $formation->setPrix(10);
    //     $formation->setChapitre(null);
    //     $formation->setCreateAt($now);
    //     // Persistez chaque formation
    //         $manager->persist($formation);
    //    }

    //    for ($i=0; $i < 3; $i++) { 
    //     $userA = new User();
    //     $userA->setEmail("toto" . $i . "gmail.com");
    //     $userA->setPassword("1234" );
    //     $userA->setRole("User");
    //     $userA->setStatut(true);
    //     $userA->setCreateAt($now);
    //     $manager->persist($userA);
    //    }

    //    $roleU = new Role();
    //    $roleU->setNom("User");
    //    $manager->persist($roleU);
    //    $roleA = new Role();
    //    $roleA->setNom("Admin");
    //    $manager->persist($roleA);

        $manager->flush();
    }
}
