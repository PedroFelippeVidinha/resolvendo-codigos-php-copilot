<?php

// Saída se dará pelo terminal

// Função para ler entrada do usuário no terminal
function lerNota($mensagem)
{
    echo $mensagem . ": ";
    return trim(fgets(STDIN));
}

// Recebe as três notas do usuário
$nota1 = lerNota("Digite a primeira nota");
$nota2 = lerNota("Digite a segunda nota");
$nota3 = lerNota("Digite a terceira nota");

// Converte as entradas para números float
$nota1 = floatval($nota1);
$nota2 = floatval($nota2);
$nota3 = floatval($nota3);

// Calcula a média das notas
$media = ($nota1 + $nota2 + $nota3) / 3;

// Exibe a média das notas
echo "A média das notas $nota1, $nota2 e $nota3 é: $media" . PHP_EOL;
