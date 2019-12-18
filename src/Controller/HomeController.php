<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function home()
    {
        $text = 'hello world';

        return new Response(
            '<html><body>'.$text.'</body></html>'
        );
    }
}