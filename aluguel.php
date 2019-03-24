<?php

print "Por quantos dias o carro foi utilizado?";
$dias_com_carro = (int) fgets (STDIN); // R$60,00 cada dia

print "Quantos km foram percorridos?";
$km_corrido = (int) fgets (STDIN); // R$0,15 cada km

$preco_dias = $diasComCarro * 60; 

$preco_Km = $kmCorrido * 0,15;

$preco_total = $preco_dias + $preco_km

print "O preço total do aluguel é de: $preco_total";
