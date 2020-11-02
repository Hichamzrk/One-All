<?php
    namespace App\Entity;
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * @ORM\Entity
     * @ORM\Table(name="Request")
     */
    class Request
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
        private $category;
        /**
         * @ORM\Column(type="text")
         */
        private $details;
        /**
         * @ORM\Column(type="integer")
         */
        private $phone;

        public function getAdress(){

            return $this->adress;

        }
       
        public function getCategory(){

            return $this->category;

        }
       
        public function getDetails(){

            return $this->details;

        }
       
        public function getPhone(){

            return $this->phone;

        }

        public function setAdress($address){

            $this->adress = $adress;

            return $this->adress;

        }

        public function setCategory(){
            
            $this->category = $category;

            return $this->category;

        }
       
        public function setDetails(){

            $this->details = $details;

            return $this->details;

        }
       
        public function setPhone(){

            $this->phone = $phone;

            return $this->phone;

        }
    }
    