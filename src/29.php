<?php
// Example PHP code for mathematical calculations and data handling

// Function to calculate the area of a rectangle
function area($length, $width) {
    return $length * $width;
}

// Function to calculate the perimeter of a rectangle
function perimeter($length, $width) {
    return 2 * ($length + $width);
}

// Example usage:
$length = 5; // in units
$width = 3; // in units

$area = area($length, $width);
perimeter = perimeter($length, $width);

echo "Area of the rectangle: $area square units\n";
echo "Perimeter of the rectangle: $perimeter meters\n";
?>
