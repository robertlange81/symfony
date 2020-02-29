<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function homePage() {
        return new Response("Hello Symfony Respone Object");
    }
}