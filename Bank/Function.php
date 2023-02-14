<?php  
//Require of Bank
function sacar($conta, $valorASacar)
{ 
    if ($valorASacar >$conta ['saldo']) {
        exibeMensagem(msg:"Limite Insuficiente");

    }else {
        $conta['saldo'] -= $valorASacar;
    }return $conta;
}
function depositar ($conta, $valorADepositar)
{

    if ($valorADepositar < 0) {
        exibeMensagem(msg:"Você não pode fazer isso ! ");

    }else {
        $conta['saldo'] += $valorADepositar;
    }return $conta;
}

function exibeMensagem ($msg)
{
    echo $msg . PHP_EOL;
}


