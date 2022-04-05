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
