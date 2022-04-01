<?php
    abstract class Unit{
        
        //properties
        protected $firstName;
        protected $nickname;
        public $activity;
        public $power;

        // method
        public function activity($activity){
            return 'Activity of unit is '.' '.$activity;
        }

        // abstract method
        abstract public function setPower($power);

        public function setName($firstName, $nickname){
            return 'First name:'.' '.$firstName.' '.'Nickname:'.' '.$nickname;
        }
    }

    class Dad extends Unit{
        public function setPower($power){
            return 'Mi power is'.' '.$power;
        }

        public function activity($activity){
            return 'Activity of dad is '.' '.$activity;
        }

    }

    $juan = new Dad();
    echo $juan->activity('Run')."<br/>";
    echo $juan->setPower('programming')."<br/>";
?>