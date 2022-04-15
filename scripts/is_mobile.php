<?php
/**
 * Determine if the provided phone number is a UK mobile number.
 *
 * Run this script as follows:
 *
 * ```bash
 * php scripts/is_mobile.php 07777123456
 * php scripts/is_mobile.php 01904123456
 * ```
 */

$args = $argv; // $argv is a global variable, so we need to copy it.
array_shift($args); // this removes "is_mobile.php" from the arguments.

if (1 !== count($args)) {
    echo "Expecting a phone number." . PHP_EOL;
    exit(1);
}

if ($args[0][0] === '0' && $args[0][1] === '7') {
    echo 'This is a mobile phone number.' .PHP_EOL;
} else  {
    echo 'This phone number is not a mobile number.' . PHP_EOL;
}


