<?php
/*
La interfaz es similar a las clases abstractas. La diferencia entre interfaces y clases abstractas son:

Las interfaces no pueden tener propiedades, mientras que las clases abstractas pueden
Todos los métodos de interfaz deben ser públicos, mientras que los métodos de clase abstracta son públicos o protegidos.
Todos los métodos en una interfaz son abstractos, por lo que no se pueden implementar en el código y la palabra clave abstracta no es necesaria.
Las clases pueden implementar una interfaz mientras heredan de otra clase al mismo tiempo
*/

interface Automovil {
    public function getTipo();
    public function getRuedas();
}

class Coche implements Automovil {
    public function getTipo(){
        echo "Coche";
    }
    public function getRuedas(){
        echo "4";
    }
}

class Moto implements Automovil {
    public function getTipo(){
        echo "Moto";
    }
    public function getRuedas(){
        echo "2";
    }
}
?>