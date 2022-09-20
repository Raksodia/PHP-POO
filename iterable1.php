<!DOCTYPE html>
<html>
<body>

<?php
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item."<br>";
  }
}

$arr = ["a", "b", "c"];
printIterable($arr);
?>

</body>
</html>