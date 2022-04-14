<?php
    
    namespace Juan;
    
    class GoldArmor implements Armor
    {
        public function absorbDamage($damage)
        {
            return $damage*3;
        }
    }
