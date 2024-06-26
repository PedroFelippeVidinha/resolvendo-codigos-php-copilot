<?php

// Saída se dará pelo terminal


// Função para ler entrada do usuário no terminal
function lerEntrada($mensagem)
{
    echo $mensagem . ": ";
    return trim(fgets(STDIN));
}

// Recebe os números e a operação
$num1 = lerEntrada("Digite o primeiro número");
$num2 = lerEntrada("Digite o segundo número");
$operacao = lerEntrada("Digite a operação (+, -, *, /)");

// Realiza a operação selecionada
switch ($operacao) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        // Verifica se o divisor é zero para evitar divisão por zero
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Divisão por zero não é permitida";
        }
        break;
    default:
        $resultado = "Operação inválida";
        break;
}

// Exibe o resultado da operação
echo PHP_EOL; // Adiciona uma quebra de linha para melhorar a visualização
echo "Resultado da operação: $num1 $operacao $num2 = $resultado" . PHP_EOL;
