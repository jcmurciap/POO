<?php

namespace Juan\Weapons;

use Juan\Unity;
use Juan\Weapon;

class BasicSword extends Weapon
{
    protected $damage = 10;
    protected $description = ':unit ataca con la espada a :opponent';
}
