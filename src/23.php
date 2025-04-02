<?php
function solve_math_problem($problem) {
    $solution = file_get_contents("{$problem}.txt");
    $solution = str_replace("\n", "", $solution); // Remove newline character from solution

    // Add your PHP code here to solve the problem and return the result

    return "The solution is: $solution";
}
