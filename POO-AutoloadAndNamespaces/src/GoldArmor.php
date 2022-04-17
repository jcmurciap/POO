<?php
    
    namespace Juan;
    
    class GoldArmor implements Armor
    {
        public function absorbDamage(Attack $attack)
        {
            return $attack->getDamage()/3;
        }
    }
