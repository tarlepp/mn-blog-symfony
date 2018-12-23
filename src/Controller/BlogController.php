<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog_list")
     */
    public function list(): Response
    {
        return $this->render('blog/list.html.twig');
    }

    /**
     * @Route("/new", name="blog_new")
     */
    public function new(): Response
    {
        return $this->render('blog/new.html.twig');
    }
}
