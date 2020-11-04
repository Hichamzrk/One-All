<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class MainController extends AbstractController
    {
        public function index(){

            $post = new Post();

            dump($post);

            $response = $this->renderView("Main/index.html.twig");

            return new Response($response);
        }
    }


    