<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController{
    public function index() {
        // return new Response('<html>
        // <body>
        // <h1>Bulding New Application</h1>
        // </body>
        // </html>');

        return $this->render('News/index.html.twig', [
            'category' => '...',
            'promotions' => ['...', '...'],
        ]);
    }
}
