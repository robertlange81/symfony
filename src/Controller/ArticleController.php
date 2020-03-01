<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
        return new Response("Slug is $slug");
    }
}