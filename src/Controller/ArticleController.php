<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homePage() {
        return new Response("Hello Symfony Respone Object");
    }

    /**
     * @Route("/news/{slug}")
     * @return Response
     */
    public function show($slug) {
        $comments = [
            "Kommentar 1",
            "Kommentar 2",
            "Kommentar 3",
        ];

        dump($slug, $this);

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', '', $slug)),
            'comments' => $comments
        ]);
    }
}