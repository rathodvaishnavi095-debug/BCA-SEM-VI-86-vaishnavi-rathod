<?php
// Declare an array
$numbers = array(10, 25, 8, 45, 32, 19);

// Assume first element is the biggest
$biggest = $numbers[0];

// Loop through the array
for ($i = 1; $i < count($numbers); $i++) {
    
    if ($numbers[$i] > $biggest) {
        $biggest = $numbers[$i];
    }
}

// Display the biggest number
echo "The biggest number in the array is: " . $biggest;
?>