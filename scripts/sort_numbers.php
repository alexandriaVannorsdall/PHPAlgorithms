<?php
/**
 * Sort the provided numbers in ascending order.
 *
 * Run this script as follows:
 *
 * ```bash
 * php scripts/sort_numbers.php 5 1 9
 * ```
 *
 * You can put any amount of numbers after "sort_numbers.php"
 */

$args = $argv; // $argv is a global variable, so we need to copy it.
array_shift($args); // this removes "sort_numbers.php" from the arguments.

if (empty($args)) {
    echo "Expecting numbers as arguments." . PHP_EOL;
    exit(1);
}
$ordered = [];
for ($index = 0; $index < count($args); $index++) {
    $number = $args[$index];
    if ($index === 0) {
        $ordered[] = $number;
        continue;
    }
    $lastIndex = count($ordered) - 1;
    if ($number >= $ordered[$lastIndex]) {
        $ordered[] = $number;
        continue;
    }
    if ($number <= $ordered[0]) {
        array_unshift($ordered, $number );
        continue;
    }
    for($otherIndex = 0; $otherIndex < count($ordered); $otherIndex++) {
       $orderedNumber = $ordered[$otherIndex];
        $nextOrderedNumber = $ordered[$otherIndex  + 1];
       if ($number >= $orderedNumber  && $number <= $nextOrderedNumber) {
           array_splice($ordered, $otherIndex + 1, 0, $number);
           break;
       }
    }
}
echo 'The order of the numbers are: ' .implode(",", $ordered). PHP_EOL;

