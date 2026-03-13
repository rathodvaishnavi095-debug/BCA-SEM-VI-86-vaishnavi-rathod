<?php
$a = 24;   
$b = 36;   

$hcf = 1;

for($i = 1; $i <= $a && $i <= $b; $i++) {
    if($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF of $a and $b is: $hcf";
?>