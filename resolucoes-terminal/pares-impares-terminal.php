<?php

// A saída se dará pelo terminal

// Função para ler entrada do usuário no terminal
function lerEntrada($mensagem)
{
    echo $mensagem . ": ";
    return trim(fgets(STDIN));
}

// Recebe o número inteiro do usuário
$num = lerEntrada("Digite um número inteiro");

// Verifica se o número é par ou ímpar
if ($num % 2 == 0) {
    echo "$num é um número par." . PHP_EOL;
} else {
    echo "$num é um número ímpar." . PHP_EOL;
}
