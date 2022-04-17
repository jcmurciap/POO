<?php
    
/**
 * se usa para evitar prefijos al instanciar una clase 
 * porque usualmente se repite el nombre de las clases
*/
namespace Juan; 

require '../vendor/autoload.php';

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
$camilo = new Unity('camilo', new Weapons\CrossBow);
$ramm->setArmor(new GoldArmor());
$camilo->attack($ramm);
$ramm->attack($camilo);
$ramm->attack($camilo);
