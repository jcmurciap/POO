<?php
    
namespace Juan;
    
class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage()/1.3;
    }
}
