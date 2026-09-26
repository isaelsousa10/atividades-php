<?php

$dia = "Quarta";
$prof = "Israel";

if ( $prof == "Renata" ) {
     if ( $dia == "Segunda" or $dia == "Segunda-feira") {
    echo "Não pode ser alocada";
}
elseif ( $dia == "Terça" or $dia =="Terça-feira") {
    echo "Não pode ser alocada";
}
}
elseif ($prof == "Israel") {

if ( $dia == "Sexta" or  $dia == "Sexta-feira") {
    echo "Não pode ser alocado";
}
elseif ( $dia == "Quinta" or  $dia == "Quinta-feira") {
    echo "Não pode ser alocado";
}
else {
   echo " Pode alocar!";
}
}
