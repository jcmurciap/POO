# Programación orientada a objetos(POO)
### Encapsulamiento
Ocultar y proteger información

Existen variables tipo public, private, protected
* public: Tiene acceso desde cualquier parte del programa
* private: Tiene acceso solo desde la clase donde es declarada.
* protected: Tiene acceso desde la clase donde es declarada y clases heredadas.

### Getter y Setter
Son utilizados cuando queremos acceder o establecer nuevos valores a variables de clase de tipo protected o private.
- Los getter permiten acceder(lectura) al contenido de la variable que se desea usar en otra clase y/o metodo.
Se recomienda usar al inicio del metodo la palabra reservada 'get'.
- Los setter permiten establecer nuevos valores a variables que se desean acceder y que estan siendo protegidas o privadas en la clase donde fueron declarada.
Se recomienda usar al inicio del metodo la palabra reservada 'set'.

### Herencia y abstracción
Es un pilar de la POO, es un mecanismo mediante el cual una clase puede obtener,utilizar y sobre-escribir metodos y propiedades no privadas de una clase concreta, esto se hace con el fin de a) reutilizar logicas de codigo hechas previamente y b) jerarquizar las clases; padre->hijo->nieto.
Para poder acceder a dichos metodos y/o propiedades se debe usar la palabra reservada 'extend' despues de la clase hijo/a

Existe el concepto de clases abstractas; este hace referencia a clases que no representan un objeto imaginable y/o concreto de la vida real;por ejemplo: unidad, ser.
Para poder crear una clase abstracta se requiere asignar la palabra clave 'abstract' previo al nombramiento de la clase.

### Interfaces y polimorfismo

* Diferencias entre interfaz y clase abstracta:
1. La interfaz es un contrato, no tiene código; es decir, para que una mesa sea una mesa debe tener por lo menos las caracteristicas de una base, numero de patas.
´´´La intefaz define QUE se construye´´´
2. La clase abstracta responde a la pregunta de ´´´COMO se implementan los métodos´´´.

### Autocarga(autoload)) de clases y nombres de espacio(namespaces) con PHP

<<<<<<< HEAD
#### Autocarga(autoloading)[https://www.php.net/manual/es/language.oop5.autoload.php](Mayor información áca)
La autocarga en PHP sugerida como buena practica permite mantener un codigo mas limpio y organizado mediante la carga automatica de clases e interfaces. Es buena practica guardar las clases en archivos separados.
=======
#### Autocarga(autoloading)[Mayor información áca](https://www.php.net/manual/es/language.oop5.autoload.php)
La autocarga en PHP sugerida como buena practica permite mantener un codigo mas limpio y organizado mediante la carga automatica de clases. Es buena practica guardar las clases en archivos separados.
>>>>>>> 3549f4df346da95b05bd1a4ae88d1aec00b6570b

Consiste en crear una función __autoload() en el arranque de la aplicación para lo cual cuando se requiera llamar para instanciar una clase la función será llamada;la cual buscará y localizará el archivo de la clase que se esta llamando.Esta última es obsoleta a partir de PHP 7.2.0

Existe una manera mas flexible usando la función spl_autoload_register(); éste acepta como parámetro una función ´´´callable´´´ que permite definir una logica para la carga de clases.

#### Nombres de espacio(namespaces)[Mayor información áca](https://www.php.net/manual/es/language.namespaces.basics.php)




