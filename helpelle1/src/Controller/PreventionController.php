<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PreventionController extends AbstractController
{
    /**
     * @Route("/prevention", name="prevention")
     */
    public function index()
    {
        return $this->render('prevention/index.html.twig', [
            'controller_name' => 'PreventionController',
        ]);
    }
}
