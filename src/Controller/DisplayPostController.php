<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class DisplayPostController extends AbstractController
    {
        public function display(EntityManagerInterface $em){

            $posts = $em->getRepository(Post::class)->findAll();

            return $this->render("DisplayPost/displaypost.html.twig", [
                'posts' => $posts
            ]);

        }
    }
