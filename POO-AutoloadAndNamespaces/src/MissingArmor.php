<?php

namespace Juan;
use Juan\Armor;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}
