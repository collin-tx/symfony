<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_list")
     */
    
    public function list()
    {
      $list = ['this a blog', 'cant you tell', 'this a list', 'of stuff'];

      $newList = $list[0];
      
      return $this->render('blog.html.twig', [
        'list' => $newList,
    ]);

    }
}

?>