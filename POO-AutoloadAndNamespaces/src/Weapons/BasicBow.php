<?php

namespace Juan\Weapons;

use Juan\Unity;
use Juan\Weapon;


class BasicBow extends Weapon
{
    protected $damage = 20;
    protected $description = ':unit dispara una flecha a :opponent';
}
