<?php

$valor_hora = 20.00;
$horas_trabalhadas = 150;
$FGTS = 0.11;
$sindicato = 0.03;
$salario_bruto = $valor_hora * $horas_trabalhadas;
$ir = 0; 
$desconto_ir = $salario_bruto * $ir;
$desconto_sindicato = $salario_bruto * $sindicato;
$salario_liquido = $salario_bruto - $desconto_sindicato;


if ($salario_bruto <= 900.00) {
    $ir = 0; 
    $desconto_ir = $salario_bruto * $ir;
    $salario_liquido = $salario_bruto - $desconto_sindicato;

    echo "O seu salario bruto é: R$ $salario_bruto, você não tem desconto de imposto de renda, o valor do FGTS é: R$ " . ($salario_bruto * $FGTS) . ", o valor do sindicato é: R$ " . ($salario_bruto * $sindicato) . ", o valor do seu salario liquido é: R$ " . ($salario_liquido);
}
elseif ($salario_bruto <= 1500.00 and $salario_bruto >900.00) {
    $ir = 0.05; 
    $desconto_ir =  $salario_bruto * $ir;
    $salario_liquido = $salario_bruto - $desconto_ir - $desconto_sindicato ; 
    echo "O seu salario bruto é: R$ $salario_bruto, você tem desconto de imposto de renda 5%, o valor do FGTS é: R$ " . ($salario_bruto * $FGTS)  . ", o valor do sindicato é: R$ " . ($salario_bruto * $sindicato) . ", o valor do seu salario liquido é: R$ " . ($salario_liquido);

}
elseif ($salario_bruto <= 2500.00 and $salario_bruto >1500.00) {
    $ir = 0.10;
    $desconto_ir =  $salario_bruto * $ir;
    $salario_liquido = $salario_bruto - $desconto_ir - $desconto_sindicato ; 
     echo "O seu salario bruto é: R$ $salario_bruto, você tem desconto de imposto de renda 10%, o valor do FGTS é: R$ " . ($salario_bruto * $FGTS)  . ", o valor do sindicato é: R$ " . ($salario_bruto * $sindicato) . ", o valor do seu salario liquido é: R$ " . ($salario_liquido);

}
elseif($salario_bruto >2500)
    $ir = 0.20; 
    $desconto_ir =  $salario_bruto * $ir;
    $salario_liquido = $salario_bruto - $desconto_ir - $desconto_sindicato ; 
    {echo "O seu salario bruto é: R$ $salario_bruto, você tem desconto de imposto de renda 20%, o valor do FGTS é: R$ " . ($salario_bruto * $FGTS)  . ", o valor do sindicato é: R$ " . ($salario_bruto * $sindicato) . ", o valor do seu salario liquido é: R$ " . ($salario_liquido);

}

?>