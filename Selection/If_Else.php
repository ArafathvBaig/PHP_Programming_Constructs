<?php
$firstNumber = readline('Enter First Number: ');
$secondNumber = readline('Enter Second Number: ');
if ($firstNumber > $secondNumber) {
    echo $firstNumber . " Greater than " . $secondNumber;
} else {
    echo $secondNumber . " Greater than " . $firstNumber;
}
