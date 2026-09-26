<?php

$saque =78;

    if ($saque <10 or $saque> 600){
    echo "Esse saque não é possível. ";
}
else {
    $valor = $saque;
    $notas100 = intdiv($valor, 100);
    $valor %= 100;

    $notas50 = intdiv($valor, 50); 
    $valor %= 50;

    $notas10 = intdiv($valor, 10);
    $valor %= 10;

    $notas5 = intdiv($valor, 5);
    $valor %= 5;

    $notas1 = intdiv($valor, 1);
    $valor %= 1;

    echo "Se seu saque é de $saque você receberá:";
     if ($notas100 > 0) echo "$notas100 nota(s) de R$ 100" . PHP_EOL;
    if ($notas50 > 0) echo "$notas50 nota(s) de R$ 50" . PHP_EOL;
    if ($notas10 > 0) echo "$notas10 nota(s) de R$ 10" . PHP_EOL;
    if ($notas5 > 0) echo "$notas5 nota(s) de R$ 5" . PHP_EOL;
    if ($notas1 > 0) echo "$notas1 nota(s) de R$ 1" . PHP_EOL;
    }
    