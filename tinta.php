<?php

    // 1 litro -> 6 metros
    // 18L -> R$80 ; 3,6L -> R$25

   print "Informe a área a ser pintada:";
   $area_para_pintar = (int) fgets (STDIN);

   // Rendimento por lata

   $rendimento_lata = 108; // 18*6
   $preco_por_lata = 80;
   $quant_lata = $area_para_pintar / $rendimento_lata;
   $custo_lata = $quant_lata * $preco_por_lata;

   print "A quantidade de latas necessárias para pintar $area_para_pintar é de $quant_lata, o que gera um custo de $custo_lata.";

   // Rendimento por galão

   $rendimento_por_galao = 21.6; // 3,6*6 
   $preco_por_galao = 25;
   $quant_galao = $area_para_pintar / $rendimento_por_galao; 
   $custo_galao = $quant_galao * $preco_por_galao;

   print "A quantidade de galões necessários para pintar $area_para_pintar é de $quant_galao, o que gera um custo de $custo_galao.";

   // Latas & Galões
    
   $custo =  
    
    
    
    /* 9. (DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
preços em 3 situações:
a. comprar apenas latas de 18 litros;
b. comprar apenas galões de 3,6 litros;
c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
arredonde os valores para cima, isto é, considere latas cheias. */