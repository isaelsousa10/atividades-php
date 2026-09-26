<?php
$nhts = 60;
$valor_hora = 10;
$salario = 0;

if ($nhts <= 40) {
    $salario = $nhts * $valor_hora;
    echo "Seu salário total é: R$ $salario";
} 
elseif ($nhts > 40 && $nhts <= 60) {
    $horas_normais = 40 * $valor_hora;
    $horas_extras = ($nhts - 40) * ($valor_hora * 1.50);
    $salario = $horas_normais + $horas_extras;
    echo "Seu salário total é: R$ $salario";
} 
else {
    $horas_normais = 40 * $valor_hora;
    $horas_extras_50 = 20 * ($valor_hora * 1.50);
    $horas_extras_100 = ($nhts - 60) * ($valor_hora * 2.00);
    $salario = $horas_normais + $horas_extras_50 + $horas_extras_100;
    echo "Seu salário total é: R$ $salario";
}
?>
