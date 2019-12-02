<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $user = new User();
         $user->setName();
         $user->setPicture();
         $user->setMail();

         //addReference = liaison fixture user avec trick
         $this->addReference(self::USER_REFERENCE, $user);

        $manager->persist($user);
        $manager->flush();
    }
}
