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
        $this->armor = new MissingArmor();
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
        $this->logger->info("{$this->name} camina hacia $direction");
    }

    public function attack(Unity $opponent)
    {
        $attack = $this->weapon->createAttack(); // attack es de tipo Attack
        Log::info($attack->getDescription($this, $opponent)); //por ende puede acceder a getDescription()... 

        $opponent->takeDamage($attack);
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);
        Log::info("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if($this->hp <= 0){
            $this->die();
        }
    }

    public function die()
    {
        Log::info("{$this->name} muere");
        exit();
    }
}
