<<?php 

$velocidade = 13;
$cansada = true;
$chuva = true;

if ($cansada == true and $velocidade <15) {
    echo "ela já atingiu a velocidade maxima porque tá cansada";
}
elseif( $chuva == true and $velocidade <12) {
    echo "ela já atingiu a velocidade máxima porque tá chovendo";
}
elseif ($velocidade >20) {
    echo "nao pode";
}
else {
    echo "pode correr";
}

?>