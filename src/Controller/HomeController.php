<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function home()
    {
        $text = 'hello world';

        return $this->render('home/home.html.twig', [
            'text' => $text,
        ]);
    }
}