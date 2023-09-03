<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "desordenadas: ";
var_dump($notas);
echo "ordenadas: ";
var_dump($notasOrdenadas);

$notasArray= [
    [
        'aluno' => 'Ramon',
        'nota' => '10'
    ],
    [
        'aluno' => 'João',
        'nota' => '7'
    ],[
        'aluno' => 'Filippa',
        'nota' => '9'
    ],
    [
        'aluno' => 'Izadora',
        'nota' => '6'
    ],
];

function ordenarNotas(array $nota1, array $nota2):int{
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    if ($nota2['nota'] > $nota1['nota']){
        return 1;
    }
    return 0;
}

usort($notasArray, 'ordenarNotas');
echo "ordenadas por nota:";
var_dump($notasArray);

function ordenarNotas2(array $nota1, array $nota2):int{
    return $nota1['nota'] <=> $nota2['nota'];
    //operador <=> ->  Se o primeiro elemento antes do operador for menor do que o elemento depois do operador ele retorna -1, se o primeiro elemento for maior ele retorna 1 e se eles forem iguais ele retorna 0.
}

usort($notasArray, 'ordenarNotas2');
var_dump($notasArray);