<?php

$horas_trabalhadas_total = 260;
$jornada_trabalho_normal = 240;

if ($horas_trabalhadas_total > $jornada_trabalho_normal) {
     $horas_extras = $horas_trabalhadas_total - $jornada_trabalho_normal;
     $horas_descanso = $horas_extras * 1.5;
    echo "ele descansou $horas_descanso h";

}
elseif ($horas_trabalhadas_total < $jornada_trabalho_normal) {
    echo "nao deu o minimo de horas, vai trabalhar :>";
}
else 
    "ele nao descansou";
