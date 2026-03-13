<?php
$number = 153;   // number to check
$original = $number;
$sum = 0;

while ($number > 0) {
    $digit = $number % 10;      // get last digit
    $sum = $sum + ($digit * $digit * $digit);  // cube of digit
    $number = (int)($number / 10);  // remove last digit
}

if ($sum == $original) {
    echo $original . " is an Armstrong number.";
} else {
    echo $original . " is not an Armstrong number.";
}
?>