<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisualizeController extends AbstractController
{
    /**
     * @Route("/visualize", name="visualize")
     */
    public function index(): Response
    {
        return $this->render('visualize/index.html.twig', [
            'controller_name' => 'VisualizeController',
        ]);
    }
}
