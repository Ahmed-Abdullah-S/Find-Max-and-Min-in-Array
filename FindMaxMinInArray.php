<?php

function findMaxMin($array)
{
    // Initialize max and min values
    $max = PHP_INT_MIN;
    $min = PHP_INT_MAX;

    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
        if ($value < $min) {
            $min = $value;
        }
    }

    return ["max" => $max, "min" => $min];
}

// Example array
$array = [2, 5, 1, 8, 3];

// Get max and min
$result = findMaxMin($array);
echo "Max: " . $result["max"] . "\n"; // Output: 8
echo "Min: " . $result["min"] . "\n"; // Output: 1
