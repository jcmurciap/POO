<?php

namespace Juan\Weapons;

use Juan\Unity;
use Juan\Weapon;

class BasicSword extends Weapon
{
    protected $damage = 10;
    
    public function getDescription(Unity $attacker, Unity $opponent)
    {
        return "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
    }
}
