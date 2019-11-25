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

            //$newTrick->setTitle($trick['title']);

            $manager->persist($newTrick);
        }

        $manager->flush();
    }

    private function getData()
    {
        return [
            [
                'title' => 'blabla',
            ],
            [
                'title' => 'blabla 2',
            ]
        ];
    }
}
