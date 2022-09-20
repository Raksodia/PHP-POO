<?php
/*
público: se puede acceder a la propiedad o al método desde cualquier lugar. esto es por defecto
protegido: se puede acceder a la propiedad o método dentro de la clase y por clases derivadas de esa clase
privado: SÓLO se puede acceder a la propiedad o al método dentro de la clase
*/

class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>