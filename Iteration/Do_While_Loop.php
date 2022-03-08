<?php
//Print numbers from 0 to n using while loop
$limit = readline('Enter the Limit N: ');
$i = 0;
do {
    echo $i . " ";
    $i++;
} while ($i <= $limit);
