<?php

namespace Juan\Weapons;

use Juan\Unity;
use Juan\Weapon;

class CrossBow extends Weapon
{
    protected $damage = 100;
    
    public function getDescription(Unity $attacker, Unity $opponent)
    {
        return "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }
}
