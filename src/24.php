<?php
// Problem 1.19: Find the missing number in an array.
function findMissingNumber($numbers) {
    $sum = array_sum(range(0, count($numbers)));
    $totalSum = array_sum(range(0, count($numbers) + 1));
    
    return $totalSum - $sum;
}
