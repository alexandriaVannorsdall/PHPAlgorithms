<?php
/**
 * Work out the largest number provided.
 *
 * Run this script as follows:
 *
 * ```bash
 * php scripts/compare_two_numbers.php 5 2
 * ```
 */

$args = $argv; // $argv is a global variable, so we need to copy it.
array_shift($args); // this removes "compare_two_numbers.php" from the arguments.

if (2 !== count($args)) {
    echo "Expecting exactly two numbers." . PHP_EOL;
    exit(1);
}

if ($args[0] > $args[1]) {
    echo $args[0] .PHP_EOL;
} elseif ($args[0] < $args[1]) {
    echo $args[1] . PHP_EOL;
} else {
    echo 'Both numbers are the same.' . PHP_EOL;
}

