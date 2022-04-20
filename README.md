# 1. Programación orientada a objetos(POO)
### Encapsulamiento
Ocultar y proteger información

Existen variables tipo public, private, protected
* public: Tiene acceso desde cualquier parte del programa
* private: Tiene acceso solo desde la clase donde es declarada.
* protected: Tiene acceso desde la clase donde es declarada y clases heredadas.

### Getter y Setter
Son utilizados cuando queremos acceder o establecer nuevos valores a variables de clase de tipo protected o private.
- Los getter permiten acceder(lectura) al contenido de la variable que se desea usar en otra clase y/o método.
Se recomienda usar al inicio del metodo la palabra reservada ````get````.
- Los setter permiten establecer nuevos valores a variables que se desean acceder y que estan siendo protegidas o privadas en la clase donde fueron declarada.
Se recomienda usar al inicio del metodo la palabra reservada ````set````.

### Herencia y abstracción
Es un pilar de la POO, es un mecanismo mediante el cual una clase puede obtener,utilizar y sobre-escribir metodos y propiedades no privadas de una clase concreta, esto se hace con el fin de a) reutilizar logicas de codigo hechas previamente y b) jerarquizar las clases; padre->hijo->nieto.
Para poder acceder a dichos metodos y/o propiedades se debe usar la palabra reservada ````extend```` despues de la clase hijo/a

Existe el concepto de clases abstractas; este hace referencia a clases que no representan un objeto imaginable y/o concreto de la vida real;por ejemplo: unidad, ser.
Para poder crear una clase abstracta se requiere asignar la palabra clave ````abstract```` previo al nombramiento de la clase.

### Interfaces y polimorfismo

* Diferencias entre interfaz y clase abstracta:
1. La interfaz es un contrato, no tiene código; es decir, para que una mesa sea una mesa debe tener por lo menos las caracteristicas de una base, numero de patas.
````La intefaz define QUE se construye````
2. La clase abstracta responde a la pregunta de ````COMO se implementan los métodos````.

#### Autocarga - ````autoloading```` [Consulte la información oficial](https://www.php.net/manual/es/language.oop5.autoload.php)
La autocarga en PHP sugerida como buena practica permite mantener un codigo mas limpio y organizado mediante la carga automatica de clases. Es buena práctica guardar las clases en archivos separados.

Consiste en crear una función __autoload() en el arranque de la aplicación para lo cual cuando se requiera llamar para instanciar una clase la función será llamada;la cual buscará y localizará el archivo de la clase que se esta llamando.Esta última es obsoleta a partir de PHP 7.2.0

Para organizar el código de las clases(programa/proyecto) tomaremos el estandar PSR-1, el cual consiste en nombrar los archivos de igual manera como las clases, se recomienda crear una carpeta o directorio ````source```` donde vivirán los archivos anteriormente creados;en ocasiones se puede llamar esta carpeta de diferentes maneras como: src/, lib/, app/.

También se crea un directorio ````vendor/```` para almacenar todos los archivos de codigo de tercero que no han sido desarrollados por el desarrollador pero que estan siendo usados para el proyecto en curso; tales son frameworks,clases,componentes. 


#### Nombres de espacio -````namespaces```` [Consulte la información oficial](https://www.php.net/manual/es/language.namespaces.basics.php)

Es un contenedor abstracto donde todos los archivos que vivan al interior de él deben tener nombres únicos.
### Composer y PSR-4
* Composer
Es un administrador de dependencia para PHP, similiar a NPM en node y Bundler en Ruby. Es la solución ideal para descargar, instalar y actualizar dependencias y librerias en proyectos que se vayan a realizar.Composer se encarga de gestionar las librerias por proyectos sin embargo puede aplicarse de manera global con el comando ````global````.
* PSR-4
Son recomendaciones estandar de PHP para estandarizar conceptos usados en POO(); permite a) la interoperabilidad:caracteristica del sistema al interatuar con otro sistema, b) proporcionar una base tecnica común para implementar conceptos probados para prácticas de programación.
Existen alrededor de 20 PSR's, particularmente se abordará el PSR-4 que consiste en la ````especificación para clases de carga automática desde rutas de archivo.Esta recomendación también expone donde se colocan los archivos que se cargarán automáticamente de acuerdo con la especificación.```` Para ampliación del contenido consulte [la documentación oficial PSR](https://www.php-fig.org/psr/psr-4/)


# 2. Métodos y propiedades estáticas y constantes

### Métodos y propiedades estáticos
* Una propiedad estática es aquella que hace parte de la clase y no del objeto que la instancia; por tal motivo deja de poderse llamar usando el keyword ````this```` a tener que llamarse ````static::nombrePropiedad````.
Al instanciarse por fuera de la clase que la contiene pasa a hacer parte de manera global,de la clase del programa, ya no hace parte de cada instancia de cada objeto.
* Un método estático se declara usando la palabra reservada ````static```` antes de la palabra reservada ````function````. Para acceder a este metodo NO hay necesidad de instanciar la clase contendora.

### Constructores semánticos (named constructors) e interfaces fluidas (fluent interfaces)
* Para visualizar los constructores semánticos se requiere crear un método estático que cree y retorne una nueva instancia de clase; en el ejemplo a continuación el constructor semántico a su vez es un método factory.

````
class Name
{
    public static function newAdmin(array $attributes)
    {
        $admin = newUser($attributes);
        $admin->role = 'admin';

        return $admin;
    }
}

$adminName = className::newAdmin($attributtes);
````
````$adminName```` es un nuevo User y tiene el rol ````admin````.
Con esto estas evitando tener que instanciar de la clase y asignarle un rol.

* Las interfaces fluidas sirven para modificar el estado de un objeto(como un setter), lo único que se debe hacer es retornar ````this```` al finalizar el método.

`````
function setArmor(Armor $armor)
{
    this->armor = $armor;
    return $this;
}
````
