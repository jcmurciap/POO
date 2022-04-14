<?php
    class Person {
        protected $firstName;
        public $lastName;

        public function __construct($firstName, $lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        // getter
        public function getFirstName(){
            return $this->firstName;
        }

        // setter
        public function setFirstName($firstName){
            return $this->firstName = $firstName;
        }

        public function fullName(){
            return $this->firstName. ' '. $this->lastName; 
        }
    }

    $mami = new Person("Maria", "Pimentel");
    $fullName = $mami->fullName();
    echo $fullName."<br/>";
    
    // calling a getter
    $momName = $mami->getFirstName();
    echo 'Get mom name:'.' '.$momName."<br/>"; // Maria

    // calling a setter
    $momNewName = $mami->setFirstName('Ofelia');
    echo 'set new mom name:'.' '.$momNewName."<br/>"; // Ofelia
?>
