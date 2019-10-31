<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomController extends AbstractController
{
    /**
     * @Route("/welcom", name="welcom")
     */
    public function index()
    {
        return $this->render('welcom/index.html.twig', [
            'controller_name' => 'WelcomController',
        ]);
    }
}
