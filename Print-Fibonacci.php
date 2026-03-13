<?php
$n = 10;   

$a = 0;
$b = 1;

echo "Fibonacci Series: ";

for($i = 1; $i <= $n; $i++) {
    echo $a . " ";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
?>