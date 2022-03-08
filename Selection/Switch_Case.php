<?php
$a = readline('Enter Value of A: ');
$b = readline('Enter Value of B: ');
echo "1. Addition";
echo "\n2. Subtraction";
echo "\n3. Multiplication\n";
$choice = readline('Enter Your Choice: ');
switch ($choice) {
    case 1:
        $addition = $a + $b;
        echo "Addition of " . $a . " and " . $b . " is: " . $addition;
        break;
    case 2:
        $subtraction = $a - $b;
        echo "Subtraction of " . $a . " and " . $b . " is: " . $subtraction;
        break;
    case 3:
        $multiplication = $a * $b;
        echo "Multiplication of " . $a . " and " . $b . " is: " . $multiplication;
        break;
    default:
        echo "Your choice does not exist.";
}
