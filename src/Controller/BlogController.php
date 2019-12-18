<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/", name="blog_title")
     */
    
    public function title()
    {
      // $list = ['this a blog', 'cant you tell', 'this a list', 'of stuff'];

      // $newList = $list[0];

      $title = "I'll change this later";
      $comments = [
        "comment number 1",
        "second comment",
        "third and final comment"
      ];

      dump($title, $this);

      
      return $this->render('blog.html.twig', [
        // 'list' => $newList,
        'title' => $title,
        'comments' => $comments,
    ]);
    }

}
?>