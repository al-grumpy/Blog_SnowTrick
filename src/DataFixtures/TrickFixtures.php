<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use App\DataFixtures\UserFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrickFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as $key => $trick) {
            $newTrick = new Trick();
            $newTrick->setName($trick['name']);
            $newTrick->setDescript($trick['descript']);
            $newTrick->setGroup($trick['group']);
            $newTrick->setUser($this->getReference(UserFixtures::USER_REFERENCE));

            $manager->persist($newTrick);
        }

        $manager->flush();
    }


    private function getData()
    {
        return [
            [
                'name' => '',
            ],
            [
                'descript' => '',
            ],
            [
                'group' => '',
            ],
            [
                'image' => '',
            ],
            [
                'video' => '',
            ],
            [
                'user' => '',
            ]
        ];
    }
}
