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
            show($this->weapon->getDescription($this, $opponent));

            $opponent->takeDamage($this->getDamage());
        }

        public function getDamage()
        {
            return $this->damage;
        }

        public function takeDamage($damage)
        {
            $this->hp = $this->hp - $this->absorbDamage($damage);
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

        protected function absorbDamage($damage)
        {
            if($this->armor){
                $damage = $this->armor->absorbDamage($damage);
            }
            return $damage;
        }
    }
