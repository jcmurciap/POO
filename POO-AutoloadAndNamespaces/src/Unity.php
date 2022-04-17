<?php

    namespace Juan;

    class Unity
    {
        protected $hp = 40;
        protected $name;
        protected $armor;
        protected $weapon;
        protected $damage = 10; 


        public function __construct($name, Weapon $weapon)
        {
            $this->name = $name;
            $this->weapon = $weapon;
        }

        public function setArmor(Armor $armor = null)
        {
            $this->armor = $armor;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getHp()
        {
            return $this->hp;
        }

        public function move($direction)
        {
            show("{$this->name} camina hacia $direction");
        }

        public function attack(Unity $opponent)
        {
            $attack = $this->weapon->createAttack(); // attack es de tipo Attack
            show($attack->getDescription($this, $opponent)); //por ende puede acceder a getDescription()... 

            $opponent->takeDamage($attack);
        }

        public function getDamage()
        {
            return $this->damage;
        }

        public function takeDamage(Attack $attack)
        {
            $this->hp = $this->hp - $this->absorbDamage($attack);
            show("{$this->name} ahora tiene {$this->hp} puntos de vida");

            if($this->hp <= 0){
                $this->die();
            }
        }

        public function die()
        {
            show("{$this->name} muere");
            exit();
        }

        protected function absorbDamage(Attack $attack)
        {
            if($this->armor){
                return $damage = $this->armor->absorbDamage($attack);
            }
            
            return $attack->getDamage();
        }
    }
