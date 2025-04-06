<?php
function calculateArea($rectangle) {
    $area = $rectangle['width'] * $rectangle['height'];
    echo "The area of the rectangle is: $area";
}

$rectangle1 = [
    'width' => 5,
    'height' => 3
];
calculateArea($rectangle1);
?>
