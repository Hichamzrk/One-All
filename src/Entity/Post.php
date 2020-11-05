<?php
    namespace App\Entity;
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * @ORM\Entity
     * @ORM\Table(name="post")
     */
    class Post
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         */
        private $id;
        
        /**
         * @ORM\Column(type="string")
         */
        private $adress;
        /**
         * @ORM\Column(type="string")
         */
        private $title;
        /**
         * @ORM\Column(type="text")
         */
        private $details;
        /**
         * @ORM\Column(type="string")
         */
        private $phone;

        public function getAdress(){

            return $this->adress;

        }
       
        public function getTitle(){

            return $this->title;

        }
       
        public function getDetails(){

            return $this->details;

        }
       
        public function getPhone(){

            return $this->phone;

        }

        public function setAdress($adress){

            $this->adress = $adress;

            return $this->adress;

        }

        public function setTitle($title){
            
            $this->title = $title;

            return $this->title;

        }
       
        public function setDetails($details){

            $this->details = $details;

            return $this->details;

        }
       
        public function setPhone($phone){

            $this->phone = $phone;

            return $this->phone;

        }
    }
    