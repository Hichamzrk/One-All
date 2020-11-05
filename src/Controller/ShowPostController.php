<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class ShowPostController extends AbstractController
    {
        public function show(EntityManagerInterface $em){

            $posts = $em->getRepository(Post::class)->findAll();

            dd($posts);

            return $this->render("ShowPost/showpost.html.twig", [
                'posts' => $posts
            ]);

        }
    }
