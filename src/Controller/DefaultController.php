<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index()
    {
        $name = 'Zezinho';

        return $this->render('index.html.twig', compact('name'));
    }

    #[Route('/product/{slug}', name: 'product_single')]
    public function product($slug)
    {
        return $this->render('single.html.twig', compact('slug'));
    }
}
