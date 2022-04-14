<?php
    
    /**
     * se usa para evitar prefijos al instanciar una clase 
     * porque usualmente se repite el nombre de las clases
    */
    namespace Juan; 

    require '../vendor/autoload.php';
    
    
    /**
     * Asi es como funciona el autoloading, composer lo genera automáticamente
    */
    
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
    
    $armor = new BronzeArmor();
    $ramm = new Soldier('Ramm');
    $camilo = new Archer('camilo');
    $camilo->attack($ramm);
    $ramm->setArmor(new GoldArmor());
    $camilo->attack($ramm);
    $ramm->attack($camilo);
