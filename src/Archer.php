<?php
    namespace Juan;
    use Warcraft\Armor;

    class Archer extends Unity
    {
        protected $damage = 20;

        public function attack(Unity $opponent)
        {
            show("{$this->name} dispara una flecha a {$opponent->getName()}");
            $opponent->takeDamage($this->damage);
        }
    }


?>