<?php
    
/**
 * se usa para evitar prefijos al instanciar una clase 
 * porque usualmente se repite el nombre de las clases
*/
namespace Juan; 

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha a :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent'
]);

/*
spl_autoload_register(function($className)
{
    show("Intentando cargar $className"); // Juan\BronzeArmor

    if(strpos($className, 'Juan\\') === 0)
    {
        $className = str_replace('Juan\\','',$className);
        exit($className); // BronzeArmor

        if(file_exists("src/$className.php")){
            require "src/$className.php";
        }
    }
});
*/
    
$ramm = new Unity('Ramm', new Weapons\FireBow);
$ramm->setArmor(new BronzeArmor());
$camilo = new Unity('camilo', new Weapons\CrossBow);
$ramm->setArmor(new GoldArmor());
$camilo->attack($ramm);
$ramm->attack($camilo);
$ramm->attack($camilo);
