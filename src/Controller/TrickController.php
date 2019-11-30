<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TrickController extends AbstractController
{
    /**
     * @Route("/trick", name="trick")
     */
    public function index()
    {
        return $this->render('trick/index.html.twig', [
            'controller_name' => 'TrickController',
        ]);
    }

    /**
     * @Route("/trickList")
     * @Template
     */
    public function tricksList(/**  */)
        {
            // return ['tricks' => $manager->getRepository(Trick::class)->findBy(['isOnline' => true])];
            return [];
        }
        
    /**
     * @Route(
     * "/Trick/{postId</d+>}",
     * name="trick",
     * methods={"GET"}
     * )
     * @Template
     */
    public function showTrick($postId)
        {
            // return ['trick' => $manager->getRepository(Trick::class)->findBy(['isOnline' => true])];
            return [];
        }
        
}
