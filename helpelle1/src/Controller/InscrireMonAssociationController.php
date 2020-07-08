<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InscrireMonAssociationController extends AbstractController
{
    /**
     * @Route("/inscrire/mon/association", name="inscrire_mon_association")
     */
    public function index()
    {
        return $this->render('inscrire_mon_association/index.html.twig', [
            'controller_name' => 'InscrireMonAssociationController',
        ]);
    }
}
