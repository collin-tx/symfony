<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function home()
    {
        $text = 'hello world';

        return $this->render('home/home.html.twig', [
            'text' => $text,
        ]);
    }

        /**
     * @Route("/{slug}")
     */
    public function show($slug)
    {

        return new Response(sprintf(
            'One day this page will show some kewl stuff, like: %s',
            $slug
        ));
    }
}