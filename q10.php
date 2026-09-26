<?php

$tipo_carne = "Picanha";    
$quantidade_kg = 6.0;       
$usa_cartao = "S";          

$preco_kg = 0.0;
$nome_carne_valido = true;

if ($tipo_carne == "Filé Duplo") {
    if ($quantidade_kg <= 5.0) {
        $preco_kg = 4.90;
    } else {
        $preco_kg = 5.80;
    }
} else if ($tipo_carne == "Alcatra") {
    if ($quantidade_kg <= 5.0) {
        $preco_kg = 5.90;
    } else {
        $preco_kg = 6.80;
    }
} else if ($tipo_carne == "Picanha") {
    if ($quantidade_kg <= 5.0) {
        $preco_kg = 6.90;
    } else {
        $preco_kg = 7.80;
    }
} else {
    $nome_carne_valido = false;
}

if ($nome_carne_valido == false) {
    echo "Erro: Tipo de carne inválido.";
} else {

    $valor_bruto = $quantidade_kg * $preco_kg;
    $desconto = 0.0;

    if ($usa_cartao == "S") {
        $desconto = $valor_bruto * 0.05;
    }

    $valor_total = $valor_bruto - $desconto;

   
    
    echo "Carne Escolhida : " . $tipo_carne . "\n";
    echo "Quantidade      : " . number_format($quantidade_kg, 2, ',', '.') . " Kg\n";
    echo "Preço por Kg    : R$ " . number_format($preco_kg, 2, ',', '.') . "\n";
   
    echo "Valor Bruto     : R$ " . number_format($valor_bruto, 2, ',', '.') . "\n";
    
    if ($usa_cartao == "S") {
        echo "Desconto (5%)   : - R$ " . number_format($desconto, 2, ',', '.') . "\n";
    } else {
        echo "Desconto (5%)   : R$ 0,00 (Não aplicado)\n";
    }
    
   
    echo "VALOR A PAGAR   : R$ " . number_format($valor_total, 2, ',', '.') . "\n";
    
    echo "Obrigado pela preferência!\n";
}
?>
