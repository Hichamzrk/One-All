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

            return $this->render("ShowPost/showpost.html.twig", [
                
                'posts' => $posts
            
            ]);

        }

        public function showOne(EntityManagerInterface $em, $id){

            $posts = $em->getRepository(Post::class)->findBy([
                
                'id' => $id
                
            ]);

            return $this->render("ShowPost/onepost.html.twig", [
                
                'posts' => $posts
            
            ]);

        }
    }
