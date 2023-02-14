<?php

require "Function.php";

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Diogo',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Izabela ',
        'saldo' => 3000
    ],
    '123.256.789-12' => [
        'titular' => 'Maria ',
        'saldo' => 3500
    ]
];

$contasCorrentes ['123.256.789-12'] = depositar ($contasCorrentes ['123.256.789-12'], valorADepositar: 500);
$contasCorrentes ['123.456.789-10'] = sacar ($contasCorrentes ['123.456.789-10'], valorASacar: 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem ( msg: $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']); 
}