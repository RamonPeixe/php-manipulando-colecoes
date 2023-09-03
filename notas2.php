<?php

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

//ordena
sort($notasArray);
var_dump($notasArray);
//ordena inverso
rsort($notasArray);
var_dump($notasArray);

if(is_array($notasArray)){
    echo "Sim, é um array!".PHP_EOL;
}

var_dump(array_is_list($notasArray));


//array_key_exists = verifica se a chave existe
//in_array = verifica se o valor existe
//isset = verifica se a chave existe e não é nula

var_dump(array_key_exists('Ramon', $notasArray));

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 7,
    'João' => 8,
    'Ana' => 10,
    'Maria' => 9,
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

var_dump($alunosFaltantes);

$alunos = [
    'Vinicius',
    'João',
    'Ana',
    'Maria',
];

$novosAlunos = [
    'Daiane',
    'Nico',
    'Julia',
    'Patricia',
];

$sala = array_merge($alunos, $novosAlunos);

$sala2 = [...$alunos, 'Ramon',...$novosAlunos];

var_dump($sala);

var_dump($sala2);

array_push($sala2, "Pedro", "Aline");
var_dump($sala2);
$sala2[] = 'Luiz';
var_dump($sala2);

//adiciona no começo do array
array_unshift($sala2, "Beatriz");
var_dump($sala2);

