<?php
/**
 * Work out the maximum number provided.
 *
 * Run this script as follows:
 *
 * ```bash
 * php scripts/max.php 1 5 9
 * ```
 *
 * You can put any amount of numbers after "max.php"
 */

$args = $argv; // $argv is a global variable, so we need to copy it.
array_shift($args); // this removes "max.php" from the arguments.

if (empty($args)) {
    echo "Expecting numbers as arguments." . PHP_EOL;
    exit(1);
}

$largest = PHP_INT_MIN; // Set to be the smallest possible integer. And since $args is not empty, we will overwrite it.

// Compare if current element is larger than our current $largest.
foreach ($args as $arg) {
    if ($arg > $largest) {
        $largest = $arg;
    }
}

echo 'The largest number is:' . $largest . PHP_EOL;

//var_dump($args[2]); // remove this and add your algorithm.
