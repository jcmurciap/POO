<?php

namespace Juan;

abstract class Weapon
{
    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }
    
    abstract public function getDescription(Unity $attacker, Unity $opponent);
}
