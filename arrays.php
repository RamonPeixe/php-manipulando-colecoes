<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

foreach ($array as $nomeNumero) {
    echo $nomeNumero . PHP_EOL;
}

foreach ($array as $numeral => $nomeNumero) {
    echo $numeral . PHP_EOL;
}

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;
echo "Total: " . sizeof($array) . PHP_EOL;

