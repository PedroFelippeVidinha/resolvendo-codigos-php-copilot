<?php

// Função para ler entrada do usuário no terminal
function lerPalavra($mensagem)
{
    echo $mensagem . ": ";
    return trim(fgets(STDIN));
}

// Recebe a palavra do usuário
$palavra = lerPalavra("Digite uma palavra");

// Remove espaços em branco e converte para minúsculas para uma comparação sem distinção de maiúsculas/minúsculas
$palavra = strtolower(str_replace(' ', '', $palavra));

// Inverte a palavra
$palavraInvertida = strrev($palavra);

// Verifica se a palavra original é igual à palavra invertida
if ($palavra == $palavraInvertida) {
    echo "A palavra '$palavra' é um palíndromo." . PHP_EOL;
} else {
    echo "A palavra '$palavra' não é um palíndromo." . PHP_EOL;
}
