<?php
    namespace Juan;

    require 'src/helpers.php';
    require 'vendor/Armor.php';

    spl_autoload_register(function($className){
        show("Intentando cargar $className");
        // echo $className => ex: Juan\Archer ó Juan\Unity, etc
        
        if(strpos($className, 'Juan\\') === 0)
        {
            $className = str_replace('Juan\\','',$className);

            if(file_exists("src/$className.php")){
                require "src/$className.php";
            }
        }
    });

    // instancias de las clases
    // $prueba = new Warrior(); => Warrior no existe
    $armor = new BronzeArmor();
    $ramm = new Soldier('Ramm');
    $camilo = new Archer('camilo');
    $camilo->attack($ramm);
    $ramm->setArmor(new GoldArmor());
    $camilo->attack($ramm);
    $ramm->attack($camilo);
?>