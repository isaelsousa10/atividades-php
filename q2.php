<?php

$n1 = 1;
$n2 = 5;
$n3 = 3;
$maior = $n2;
$menor = $n1;

if ($n1 > $maior) {
    $maior = $n1;
}
if ($n3 > $maior) {
    $maior = $n3;
}
if ($n1 < $menor) {
    $menor = $n1;
}
if ($n2 < $menor) {
    $menor = $n2;
}
if ($n3 < $menor) {
    $menor = $n3;
}
echo "O maior número é: $maior";
echo " e o menor número é: $menor";