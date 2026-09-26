<?php

$peso = 120;
$altura = 2.00;
$imc = $peso / ($altura ** 2);

if ($imc <18.5){
     echo "Você está abaixo do peso.";
}
elseif ($imc <25 ) {
    echo "Você está com o peso normal.";
}
elseif ($imc <30 ) {
    echo "Você está acima do peso.";
}
elseif ($imc <40){
    echo "Você está obeso(a).";
}
else{
    echo "Você está com obesidade grave.";
}
    