<?php
/*
Los espacios de nombres son calificadores que resuelven dos problemas diferentes:
1. Permiten una mejor organización al agrupar clases que trabajan juntas para realizar una tarea.
2. Permiten utilizar el mismo nombre para más de una clase
*/

include "namespace.php";
use Html\Table as T;

$table = new T();
$table->title = "My table";
$table->numRows = 5;
?>

<html>
    <body>
        <?php $table->message(); ?>
    </body>
</html>