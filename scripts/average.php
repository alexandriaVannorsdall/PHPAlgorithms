<?php
/**
 * Calculate the average of provided numbers.
 *
 * Run this script as follows:
 *
 * ```bash
 * php scripts/average.php 1 5 9
 * ```
 *
 * You can put any amount of numbers after "average.php"
 */

$args = $argv; // $argv is a global variable, so we need to copy it.
array_shift($args); // this removes "average.php" from the arguments.

if (empty($args)) {
    echo "Expecting numbers as arguments." . PHP_EOL;
}

$sum = array_sum($args)/count($args);
echo $sum . PHP_EOL;




