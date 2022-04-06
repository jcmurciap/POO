<?php
    interface Armor
    {
        public function absorbDamage($damage);
    }

    function show($message)
    {
        echo "<p>$message</p>";
    }

    abstract class Unity
    {
        protected $hp = 40;
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
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

        abstract public function attack(Unity $opponent);

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
            return $damage;
        }
    }

    class Soldier extends Unity
    {
        protected $damage = 40;
        protected $armor;

        public function __construct($name)
        {
            parent::__construct($name);
        }

        public function setArmor(Armor $armor = null)
        {
            $this->armor = $armor;
        }

        public function attack(Unity $opponent)
        {
            show("{$this->name} ataca con la espada {$opponent->getName()}");
            $opponent->takeDamage($this->damage);

        }

        protected function absorbDamage($damage)
        {
            if($this->armor){
                $damage = $this->armor->absorbDamage($damage);
            }
            return $damage;
        }
    }

    class Archer extends Unity
    {
        protected $damage = 20;

        public function attack(Unity $opponent)
        {
            show("{$this->name} dispara una flecha a {$opponent->getName()}");
            $opponent->takeDamage($this->damage);
        }
    }

    class BronzeArmor implements Armor
    {
        public function absorbDamage($damage)
        {
            return $damage/2;
        }
    }

    class SilverArmor implements Armor
    {
        public function absorbDamage($damage)
        {
            return $damage/3;
        }
    }

    class GoldArmor implements Armor
    {
        public function absorbDamage($damage)
        {
            return $damage*3;
        }
    }

    $armor = new BronzeArmor();
    $ramm = new Soldier('Ramm');
    $camilo = new Archer('camilo');
    $camilo->attack($ramm);
    $ramm->setArmor(new GoldArmor());
    $camilo->attack($ramm);
    $ramm->attack($camilo);
?>
