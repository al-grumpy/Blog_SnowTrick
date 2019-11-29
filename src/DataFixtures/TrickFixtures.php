<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrickFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as $key => $trick) {
            $newTrick = new Trick();

            //$newTrick->setName($trick['name']);
            //$newTrick->setDescript($trick['descript']);
            //$newTrick->setGroup($trick['group']);

            $manager->persist($newTrick);
        }

        $manager->flush();
    }

    private function getData()
    {
        return [
            [
                'name' => 'blabla',
            ],
            [
                'descript' => 'blabla 2',
            ],
            [
                'group' => 'blabla 2',
            ],
            [
                'image' => 'blabla 2',
            ],
            [
                'video' => 'blabla 2',
            ],
            [
                'id_user' => 'blabla 2',
            ]
        ];
    }
}
