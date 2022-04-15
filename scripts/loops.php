<?php
$numbers = [3, 66, 92];
echo 'Starting foreach loop' . PHP_EOL;

foreach ($numbers as $number) {
    echo $number . PHP_EOL;
}

foreach ($numbers as $key => $value) {
    echo 'Key is this:' . $key . ' Value is this:' . $value . PHP_EOL;
}

echo 'Finished foreach loop' .PHP_EOL;

echo 'Starting for loop' . PHP_EOL;

for ($i = 0; $i < count($numbers); $i++) {
    $value = $numbers[$i];
    echo 'Key is this:' . $i . ' Value is this:' . $value . PHP_EOL;
}

echo 'Starting a while loop'. PHP_EOL;

$idx = 0;
while($idx < count($numbers)) {
    $value = $numbers[$idx];
    echo 'Key is this:' . $idx . ' Value is this:' . $value . PHP_EOL;
    $idx++;
}

echo 'Starting a do while loop'. PHP_EOL;

$index = 0;
do {
    $value = $numbers[$index];
    echo 'Key is this:' . $index . ' Value is this:' . $value . PHP_EOL;
    $index++;
} while($index < count($numbers));