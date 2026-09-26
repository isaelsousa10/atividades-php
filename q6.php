<?php

$na = 9;
$nb = 8;
$media = ($na + $nb)/2;

if ($media >=9 and  $media <= 10) {
    echo "APROVADO SUA NOTA É 'A' PARABENS, NAO ESTUDE INFORMATICA";
} elseif ($media >=7.5 and $media <9) {
     echo "APROVADO SUA NOTA É 'B' PARABENS, JAJA VOCE PERDE O INTERESSE"; 
} elseif ($media >=6 and $media <7.5) {
    echo "APROVADO NUA NOTA É 'C' VOCE É UM POUCO BURRO, MAS ACIMA DA MEDIA"; 
 } elseif ($media >6 and $media <=4) {
    echo "REPROVADO SUA NOTA É'D'MELHORE SEU JUMENTO";
 } elseif ($media >=0 and $media < 4) {
    echo "REPROVADO SUA NOTA É 'E' VAI ATRAS DE ESTUDAR SEU IDIOTA, DECEPCIONANTE ESSA NOTA";
 }

 ?>