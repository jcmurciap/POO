<?php
    
namespace Juan;
    
class GoldArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage()/3;
    }
}
