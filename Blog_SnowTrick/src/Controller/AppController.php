<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        $t = true; //test de variable

        dd($t); //test de variable
        return $this->render('app/contact.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
