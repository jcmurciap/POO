<?php

namespace Juan;

use Juan\Attack;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('Juan\Weapons\\','', get_class($this)).'Attack';
        //BasicBowAttack,...,FireBowAttack
    }
}
