<?php

$precoEtiqueta = 100.00; 
$codigoCondicao = 1;   

$valorFinal = 0.0;
$mensagem = "";

if ($codigoCondicao == 1) {
    
    $valorFinal = $precoEtiqueta - ($precoEtiqueta * 0.10);
    $mensagem = "À vista em dinheiro (10% de desconto)";
} 
elseif ($codigoCondicao == 2) {
    
    $valorFinal = $precoEtiqueta - ($precoEtiqueta * 0.05);
    $mensagem = "À vista no cartão de crédito (5% de desconto)";
} 
elseif ($codigoCondicao == 3) {
    
    $valorFinal = $precoEtiqueta;
    $valorParcela = $valorFinal / 3;
    $mensagem = "Em 3x no cartão de R$ " . number_format($valorParcela, 2, ',', '.') . " (sem juros)";
} 
elseif ($codigoCondicao == 4) {
    
    $valorFinal = $precoEtiqueta + ($precoEtiqueta * 0.10);
    $valorParcela = $valorFinal / 6;
    $mensagem = "Em 6x no cartão de R$ " . number_format($valorParcela, 2, ',', '.') . " (com 10% de juros)";
} 
else {
    $mensagem = "Código inválido!";
}

echo "Preço de etiqueta: R$ " . number_format($precoEtiqueta, 2, ',', '.') . "\n";
echo "Condição: " . $mensagem . "\n";

if ($codigoCondicao >= 1 && $codigoCondicao <= 4) {
    echo "Valor total a pagar: R$ " . number_format($valorFinal, 2, ',', '.') . "\n";
}
?>


