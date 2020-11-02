<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;

    class MainController 
    {
        public function index(){

            $response = new Response('bonjour', 200);

            return $response;

        }
    }
    

    