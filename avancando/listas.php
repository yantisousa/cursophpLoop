<?php
function sacar($conta, $valorASacar){
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Saldo insuficiente pra sacar esse valor.");
    }
    else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}
function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;   
}
$contas = [
    1234 => [
        'titular' => 'Nya',
        'saldo' => 300,
    ],
    12345 => [
        'titular' => 'Nay',
        'saldo' => 1000,
    ],
    123456 => [
        'titular' => 'Yan',
        'saldo' => 10000,
    ]
];
$contas[1234] = sacar($contas[1234], 500);
foreach($contas as $cpf => $total){
    exibeMensagem($cpf . " " . $total['titular'] . ' ' . $total['saldo']);
} 



// if(500 > $contas[1234]['saldo']){
//     exibeMensagem("Saldo insuficiente pra sacar esse valor.");
// }
// else{
//     $contas[1234]['saldo'] -= 500;
// }