
<?php

// This function generates a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// This function takes two arguments, a minimum and maximum value, and returns a random number between those values
function getRandomNumberBetween($min, $max) {
    return rand($min, $max);
}

?>