<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

    class Person {
        public $firstName;
        public $lastName;

        public function __construct($firstName, $lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function fullName(){
            return $this->firstName. ' '. $this->lastName; 
        }
    }

    $mami = new Person("Maria", "Pimentel");
    $fullName = $mami->fullName();
    echo $fullName;
?>