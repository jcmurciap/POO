<?php
    
    namespace Juan;
    
    class BronzeArmor implements Armor
    {
        public function absorbDamage(Attack $attack)
        {
            return $attack->getDamage()/1.3;
        }
    }
