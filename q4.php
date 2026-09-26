<?php

$salario_atual = 1000.00;
$percentual_aumento = 0.20;
$valor_aumento = $salario_atual * $percentual_aumento;
$novo_salario = $salario_atual + $valor_aumento;     

if ($salario_atual <= 280.00) {
    $percentual_aumento = 0.20;
} elseif ($salario_atual <= 700.00) {
    $percentual_aumento = 0.15;
} elseif ($salario_atual <= 1500.00) {
    $percentual_aumento = 0.10;
} else {
    $percentual_aumento = 0.05;
}
$valor_aumento = $salario_atual * $percentual_aumento;
$novo_salario = $salario_atual + $valor_aumento;

echo "O salário atual é: R$ $salario_atual " . PHP_EOL;
echo "O percentual de aumento é: $percentual_aumento" . PHP_EOL;
echo "O valor do aumento é: R$ $valor_aumento" . PHP_EOL;
echo "O novo salário é: R$ $novo_salario " . PHP_EOL;
