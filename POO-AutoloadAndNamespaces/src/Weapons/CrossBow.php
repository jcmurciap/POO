<?php

namespace Juan\Weapons;

use Juan\Unity;
use Juan\Weapon;

class CrossBow extends Weapon
{
    protected $damage = 100;
    protected $description = ':unit dispara una flecha a :opponent';
}
