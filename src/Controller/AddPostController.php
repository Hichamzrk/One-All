<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


    class AddPostController extends AbstractController
    {
        public function Add(Request $request, EntityManagerInterface $em){
            
            $post = new Post;
            
            $form = $this->createFormBuilder($post)
                ->add('address', TextType::class, [
                    'label' => 'Adresse',
                    'attr' => [
                        'placeholder' => 'Ex : 12 rue des mimolas 25000 Besançon'
                    ]
                ])
                ->add('lastname', TextType::class, [
                    'label' => 'Nom',
                    'attr' => [
                        'placeholder' => 'Ex : Dupont'
                    ]
                ])
                ->add('firstname', TextType::class, [
                    'label' => 'Prénom',
                    'attr' => [
                        'placeholder' => 'Ex : Jean'
                    ]
                ])
                ->add('details', TextareaType::class, [
                    'label' => 'Détails',
                    'attr' => [
                        'placeholder' => 'Donnez un maximum de détails...'
                    ]
                ])
                ->add('phone', TextType::class, [
                    'label' => 'Numéro de télèpone',
                    'attr' => [
                        'placeholder' => 'Ex : 0645789545'
                    ]
                ])
                ->add('email', EmailType::class, [
                    'label' => 'Email',
                    'attr' => [
                        'placeholder' => 'Ex : DupontEric@OneAll.com'
                    ]
                ])
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
    