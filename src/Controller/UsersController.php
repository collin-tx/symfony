<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UsersController extends AbstractController
{

    /**
     * @Route("/users")
     */
    public function users()
    {
        $users = [["Sean", 123, 'Chemical Engineer'], ["JoAnn", 321, "Office Manager"]];
        $title = 'Users Page';

        return $this->render('users.html.twig', [
            'users' => $users,
            'title' => $title,
        ]);
    }
}