<?php
$kWh = 100;
$valor = 0; 

if ( $kWh <=100 ) {
$valor = 0.50;
$valor_total = ($kWh * $valor); 
 echo "seu consumo é $kWh seu valor do kWh $valor e o valor total é $valor_total ";
}
elseif ( $kWh <=200) {
$valor = 0.70;
$valor_total = ($kWh * $valor);
 echo "seu consumo é $kWh seu valor do kWh $valor e o valor total é $valor_total ";
}

elseif ( $kWh <=300) {
$valor = 0.90;
$valor_total = ($kWh * $valor);
 echo "seu consumo é $kWh seu valor do kWh $valor e o valor total é $valor_total ";
}
else {
$valor = 1.10;
$valor_total = ($kWh * $valor);
 echo "seu consumo é $kWh seu valor do kWh $valor e o valor total é $valor_total ";
}