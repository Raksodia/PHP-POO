<?php

abstract class CocheAbstract {

public function getRuedas()
{
    return 4;
}
abstract public function setPotencia($potencia);
abstract public function getPotencia();
}
class Audi extends CocheAbstract {
public $brand = 'Audi';
protected $potencia;
public function setPotencia($potencia)
{
    $this->potencia = $potencia;
}
public function getPotencia()
{
    return $this->potencia;
}
}
$audi = new Audi;
$ruedas = $audi->getRuedas();
$audi->setPotencia(100);
$potencia = $audi->getPotencia();

echo "Coche " . $audi->brand . " de " . $ruedas . " ruedas " . "y " . $potencia . " cv de potencia";
// Devuelve Coche Audi de 4 ruedas y 100 cv de potencia

?>