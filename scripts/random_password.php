<?php
/**
 * Generate a random password
 *
 * Run this script as follows:
 *
 * ```bash
 * php scripts/random_password.php 10
 * ```
 *
 * Where the argument "10" is the length of the password to generate.
 */

$args = $argv; // $argv is a global variable, so we need to copy it.
array_shift($args); // this removes "random_password.php" from the arguments.

if (1 !== count($args)) {
    echo "Expecting a password length." . PHP_EOL;
    exit(1);
}
$randomCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$generatedPassword = [];
$stringLength = strlen($randomCharacters);

for($index = 0; $index < $args[0]; $index++) {
    $randomNumber = rand(0, $stringLength - 1);
    $generatedPassword[] = $randomCharacters[$randomNumber];
}
echo 'This is the randomly generated password:' . implode($generatedPassword) . PHP_EOL;
