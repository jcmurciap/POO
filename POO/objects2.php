
<!-- INTERACCIÓN ENTRE OBJETOS -->
<?php
    class Person{
        public function wearing($color){
            echo "{$this->name} is wearing a t-shirt $color";
        }
    }

    class Student extends Person{
        
        public function wearing($color){
            parent::wearing($color);
            echo "and blue pants";
            
        }
    }

    class Padre{
        public function parentMethod(){
            return "Soy un metodo padre";
        }
        public function metodo1(){
            return "Este es un metodo padre";
        }
    }

    class Children extends Padre {
        public function childMethod(){
            // self: se llama a si mismo"Children"
            // parent: Llama al padre
            return self::metodo1();
        }

        public function metodo1(){
            return "Este es un metodo hijo";
        }
    }
    // $person = new Children();
    // echo $person->childMethod(); 
    echo (new Children)->childMethod();
?>