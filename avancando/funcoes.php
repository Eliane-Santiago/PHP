
<?php

//Criando uma função (SUBROTINA)
function exibeMensagem(String $mensagem)
{
    echo $mensagem . PHP_EOL;
}

// Criando a função Sacar
function sacar (array $conta, float $valorSaque): array //Colocar o tipo da variável ajudar a deixar a função mais segura e ajudar a localicar os erros.
{
    if($valorSaque > $conta['saldo']){
        echo("Saque não realizado. Saldo insuficiente." . PHP_EOL );
    }else{
        $conta['saldo'] -= $valorSaque;
    }

    return $conta;
}

// Criando a função depositar
function deposito (array $conta, float $valorDeposito): array //Colocar o tipo da variável ajudar a deixar a função mais segura e ajudar a localicar os erros.
{
    if($valorDeposito < 0){
        exibeMensagem("Deposito não realizando. Valor tem que ser maior que ZERO");
    }else{
        $conta['saldo'] += $valorDeposito;
    }
    
    return $conta;
}

function titularLetraMaiuscula(array &$conta) // &$conta -> Parametro por Referência
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

    return $conta;
}

/*
>>> php.ini
Localizar as linha abaixo e retirar os comentários
;extension=mbstring (RETIRAR COMENTÁRIO DESSA LINHA -> ;)
; On windows:
;extension_dir = "ext" (RETIRAR COMENTÁRIO DESSA LINHA -> ;)
*/