<?php

$numero = 1;
$linha = 3;
$coluna = 3;
if ($numero < 1 || $numero > 3) {
    echo "Jogada Inválida: O número deve estar entre 1 e 3!";
} 
elseif ($linha ==1 || $linha ==2|| $linha == 0) {
    echo "Jogada Inválida: O número já aparece nessa linha";
}
elseif ($coluna ==1 || $coluna ==2 || $coluna ==0) {
    echo "Jogada Inválida: O número já aparece nessa coluna";
}
else {
    echo "Jogada válida! O dragão completou o desafio";
}