<?php
    
namespace Juan;
use Juan\Armor;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}
