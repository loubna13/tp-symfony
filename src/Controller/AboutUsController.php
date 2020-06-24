<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{
    /**
     * @Route("/about/us", name="about_us")
     */
    public function index()
    {
        return $this->render('about_us/index.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }
}
