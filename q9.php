<?php
 
$pergunta1 = "Telefonou para a vítima?";
$pergunta2 = "Esteve no local do crime?";
$pergunta3 = "Mora perto da vítima?";
$pergunta4 = "Devia para a vítima?";
$pergunta5 = "Já trabalhou com a vítima?";
$total_sim = 10;

if ($total_sim ==2){
    echo "Você é suspeito(a)";
} elseif ($total_sim ==3 || $total_sim ==4){
    echo "Você é cúmplice";
} elseif ($total_sim ==5){
    echo  "Você é o assasino";
} else {
    echo "INOCENTE :)";
} 