<?php
$firstNumber = readline('Enter the First Number: ');
$secondNumber = readline('Enter the Second Number: ');
$thirdNumber = readline('Enter the Third Number: ');
if ($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
    echo $firstNumber . " is Larger than " . $secondNumber . " and " . $thirdNumber;
} elseif ($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
    echo $secondNumber . " is Larger than " . $firstNumber . " and " . $thirdNumber;
} else {
    echo $thirdNumber . " is Larger than " . $firstNumber . " and " . $secondNumber;
}
