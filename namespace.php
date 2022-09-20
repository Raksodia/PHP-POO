<?php
/*
Los espacios de nombres son calificadores que resuelven dos problemas diferentes:
1. Permiten una mejor organización al agrupar clases que trabajan juntas para realizar una tarea.
2. Permiten utilizar el mismo nombre para más de una clase
*/

namespace Html;

class Table {
  public $title = "";
  public $numRows = 0;

  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}

class Row {
  public $numCells = 0;

  public function message() {
    echo "<p>The row has {$this->numCells} cells.</p>";
  }
}
?>