<?php

$maquina = true;
$reserva = true;
$plantação = true;
$qm = 100;
$manutenção = false;

if (
    ($plantação == true) &&
    ($qm >=100) &&
    ($maquina == true || $reserva == true) &&
    ($manutenção = false)

) {
    echo "Colheita autorizada";
} else  {
    echo "Colheita não autorizada";

} 

   

