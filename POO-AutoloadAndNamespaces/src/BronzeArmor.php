<?php
    
    namespace Juan;
    
    class BronzeArmor implements Armor
    {
        public function absorbDamage($damage)
        {
            return $damage/2;
        }
    }
