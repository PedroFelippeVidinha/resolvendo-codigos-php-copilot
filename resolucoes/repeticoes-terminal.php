<?php

// Saída se dará pelo terminal

// Recebe os dados do formulário
$inputString = "Cinco ";
$numeroVezes = 5;

// Repete a string o número de vezes informado
$resultado = str_repeat($inputString, $numeroVezes);

// Exibe o resultado
echo "String repetida $numeroVezes vezes:\n";
echo "$resultado".PHP_EOL;
