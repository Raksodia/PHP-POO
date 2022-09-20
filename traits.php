<?php
/*
Los rasgos se utilizan para declarar métodos que se pueden utilizar en varias clases. 
Los rasgos pueden tener métodos y métodos abstractos que se pueden usar en varias clases, 
y los métodos pueden tener cualquier modificador de acceso (público, privado o protegido).
*/

trait message1 {
public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>