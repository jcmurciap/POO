<?php
    namespace Juan;
    use Warcraft\Armor;
    
    class GoldArmor implements Armor
    {
        public function absorbDamage($damage)
        {
            return $damage*3;
        }
    }

?>