<!-- INTERACCIÓN ENTRE OBJETOS -->
<?php
    function show($message){
        echo "<p>$message</p>";
    }

    abstract class Unitt {
        
        protected $hp = 40; //vida
        protected $name;

        public function __construct($name){
            $this->name = $name;
        }
        
        // getters
        public function getName(){
            return $this->name;
        }
        public function getHp(){
            return $this->hp;
        }
        
        public function move($direction){
            show("{$this->name} camina hacia $direction");
        }

        abstract function attack(Unitt $opponent);

        public function takeDamage($damage){
            $this->setHp($this->hp - $damage);
            if($this->hp <= 0){
                $this->die();
            }
        }

        public function die(){
            show("{$this->name} muere");
        }

        private function setHp($points){
            $this->hp = $points;
            show("{$this->name} ahora tiene {$this->hp} puntos de vida");
        }
    }

    class Soldier extends Unitt{

        protected $damage = 40;

        public function attack(Unitt $opponent){
            show("{$this->name} corta a {$opponent} en dos");
            $opponent->takeDamage($this->damage);
        }

        public function takeDamage($damage){
            return parent::takeDamage($damage/2);
        }
    }
    $juan = new Soldier("camilo");
    $joe = new Soldier("joe");
    $juan->attack($joe);
?>