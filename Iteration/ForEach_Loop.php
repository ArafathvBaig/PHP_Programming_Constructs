<?php
$names = array("Arafath", "Karimulla", "Rehana", "Shafifa");
foreach ($names as $values) {
    echo $values . " ";
}

$ages = array("Arafath" => "24", "Karimulla" => "58", "Rehana" => "49", "Shafifa" => "6");
foreach ($ages as $name => $value) {
    echo "\n$name => $value";
}
