<?php
function solve_math_problem($problem) {
    $code = file_get_contents("mathematics_assignment.php");
    $solution = $code;
    
    if ($problem == "assignment_1") {
        $solution = "The solution is given in the code. Please run it and check.";
    } else if ($problem == "assignment_2") {
        $solution = "Please provide your own solution here.";
    }
    
    return $solution;
}

// Example usage:
$assignment_problem = "mathematics_assignment.php";
$solved_code = solve_math_problem($assignment_problem);
echo $solved_code;
