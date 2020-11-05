<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class AddPostController extends AbstractController
    {
        public function Add(Request $request, EntityManagerInterface $em){
            
            $post = new Post;
            
            $form = $this->createFormBuilder($post)
                ->add('adress')
                ->add('title')
                ->add('details')
                ->add('phone')
                ->add('save', SubmitType::class, ['label' => 'Envoyer'])
                ->getForm()
            ;
            
            $form->handleRequest($request);
            
            if ($form->isSubmitted() AND $form->isValid()){ 
                
                $em->persist($post);
                $em->flush();

                return $this->redirectToRoute("show_post");
            }
            
            return $this->render("AddPost/addpost.html.twig", [
                'form' => $form->createView()
            ]);

        }
    }
    