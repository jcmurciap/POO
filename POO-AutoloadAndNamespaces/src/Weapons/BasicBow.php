<?php

namespace Juan\Weapons;

use Juan\Unity;
use Juan\Weapon;


class BasicBow extends Weapon
{
    protected $damage = 20;
    
    public function getDescription(Unity $attacker, Unity $opponent)
    {
        return "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }
}
