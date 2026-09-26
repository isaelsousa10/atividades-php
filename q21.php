<?php

$horas_totais = 27;

$horas_mixxy = 0;
$horas_ninin = 0;

$duracao_turno = 6;

$turnos_completos = (int)($horas_totais / $duracao_turno);

$horas_restantes = $horas_totais % $duracao_turno;

$turnos_iguais = (int)($turnos_completos / 2);
$horas_mixxy = $turnos_iguais * $duracao_turno;
$horas_ninin = $turnos_iguais * $duracao_turno;

if ($turnos_completos % 2 !== 0) {
    $horas_mixxy = $horas_mixxy + $duracao_turno;
    
    $horas_ninin = $horas_ninin + $horas_restantes;
} else {
    
    $horas_mixxy = $horas_mixxy + $horas_restantes;
}

echo "Total do plantão: " . $horas_totais . " horas.\n";
echo "Mixxy-X789 trabalhou: " . $horas_mixxy . " horas.\n";
echo "Ninin-X989 trabalhou: " . $horas_ninin . " horas.\n";

?>
