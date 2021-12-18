<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SimulateController extends AbstractController
{
    /**
     * @Route("/simulate", name="simulate")
     */
    public function index(): Response
    {
        return 'vivaaaaaaaaaaaaaaaaaaaaaaaaaa';
        return $this->render('simulate/index.html.twig', [
            'controller_name' => 'SimulateController',
        ]);
    }
}
