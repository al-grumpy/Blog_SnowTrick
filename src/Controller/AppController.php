<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/statique")
 */
class AppController extends AbstractController
{
    /**
     * @Route("/contact")
     * @Template
     */
    public function contact(/** EntityManager $manager */)
    {
        // return ['articles' => $manager->getRepository(Article::class)->findBy(['isOnline' => true])];
        return [];
    }

    

    /**
     * @Route("/mentions-legales")
     * @Template
     */
    public function legal()
    {
        return [];
    }
}
