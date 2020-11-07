<?php
    namespace App\Entity;
    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;
    
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
         * @Assert\Length(
         *      max = 300
         * )
         */
        private $address;
        
        /**
         * @ORM\Column(type="string")
         * @Assert\Length(
         *      max = 300
         * )
         */
        private $lastName;
        
        /**
         * @ORM\Column(type="string")
         * @Assert\Length(
         *      max = 300
         * )
         */
        private $firstName;        
        
        /**
        * @ORM\Column(type="text")
         * @Assert\Length(
         *      max = 1000
         * )
        */
        private $details;
        
        /**
         * @ORM\Column(type="string")
         * @Assert\Regex(
         *      "/\d/"
         * )
         */
        private $phone;

        /**
         * @ORM\Column(type="string")
         */
        private $email;

        /**
         * @ORM\Column(type="datetime")
         */
        private $createdAt;
        
        public function __construct(){

            $this->createdAt = new \DateTime('now');

        }

        public function getAddress(){

            return $this->address;

        }
       
        public function getLastName(){

            return $this->lastName;

        }

        public function getFirstName(){

            return $this->firstName;

        }
       
        public function getDetails(){

            return $this->details;

        }
       
        public function getPhone(){

            return $this->phone;

        }

        public function getEmail(){

            return $this->email;

        }

        public function getCreatedAt(){

            return $this->createdAt;

        }

        public function getId(){

            return $this->id;

        }


        public function setAddress($address){

            $this->address = $address;

            return $this->address;

        }

        public function setLastName($lastName){
            
            $this->lastName = $lastName;

            return $this->lastName;

        }
        
        public function setFirstName($firstName){
            
            $this->firstName = $firstName;

            return $this->firstName;

        }
       
        public function setDetails($details){

            $this->details = $details;

            return $this->details;

        }
       
        public function setPhone($phone){

            $this->phone = $phone;

            return $this->phone;

        }
        
        public function setEmail($email){

            $this->email = $email;

            return $this->email;

        }
        
        public function setCreatedAt($createdAt){

            $this->createdAt = $createdAt;

            return $this->createdAt;

        }

    }
    