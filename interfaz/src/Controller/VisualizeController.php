<?php

namespace App\Controller;

use App\Service\Comm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services;

class VisualizeController extends AbstractController
{
    /**
     * @Route("/visualize", name="visualize")
     */
    public function index(Comm $comm): Response
    {
        return $comm->getInfo();

        return $this->render('visualize/index.html.twig', [
            'controller_name' => 'VisualizeController',
        ]);
    }
}
