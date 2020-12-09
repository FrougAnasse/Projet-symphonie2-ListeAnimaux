<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixutures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1=new Animal();
        $a2=new Animal();
        $a3=new Animal();
        $a4=new Animal();
        $a5=new Animal();

        $a1->setNom("chien")
           ->setDescription("un animal domestique")
           ->setImage("chien.png")
           ->setPoids(10)
           ->setDangereux(false)
        ;
        $manager->persist($a1);

        $a2->setNom("cochon")
        ->setDescription("un animal d'élevage")
        ->setImage("cochon.png")
        ->setPoids(50)
        ->setDangereux(false)

        ;
        $manager->persist($a2);

        $a3->setNom("serpent")
        ->setDescription("un animal dangereux")
        ->setImage("Serpent.png")
        ->setPoids(5)
        ->setDangereux(true)
        ;
        $manager->persist($a3);
       
        $a4->setNom("Crocodile")
        ->setDescription("un animal très dangereux")
        ->setImage("croco.png")
        ->setPoids(500)
        ->setDangereux(true)
        ;
        $manager->persist($a4);

        $a5->setNom("Requin")
        ->setDescription("un animal marin très dangereux")
        ->setImage("requin.png")
        ->setPoids(800)
        ->setDangereux(true)
        ;
        $manager->persist($a5);

        $manager->flush();
    }
}
