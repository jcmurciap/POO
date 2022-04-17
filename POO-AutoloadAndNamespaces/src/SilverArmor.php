<?php
    
    namespace Juan;
    use Juan\Armor;

    class SilverArmor implements Armor
    {
        public function absorbDamage(Attack $attack)
        {
            if($attack->isPhysical()) {
                return $attack->getDamage()/2;
            }

            return $attack->getDamage();
            
        }
    }
