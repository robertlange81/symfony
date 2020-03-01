<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homePage() {
        return $this->render('article/homepage.html.twig');
        // return new Response("Hello Symfony Respone Object");
    }

    /**
     * @Route("/news/{slug}", name="article_show")
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
            'slug' => $slug,
            'comments' => $comments
        ]);
    }

    /**
     * @Route("/news/{slug}/like", name="like_count", methods={"POST"})
     */
    public function toogleLikeCount($slug) {
        return new JsonResponse(
            ['hearts' => rand(5, 100)]
        );
    }
}