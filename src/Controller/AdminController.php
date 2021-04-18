<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_route", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('pages/admin/index.html.twig', [
            'agences' => false,
            'voitures' => false
        ]);
    }
}
