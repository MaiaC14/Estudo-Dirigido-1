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

   print "A quantidade de latas necessárias para pintar $area_para_pintar é de $quant_lata, o que gera um custo de $custo_lata reais.";

   // Rendimento por galão

   $rendimento_por_galao = 21.6; // 3,6*6 
   $preco_por_galao = 25;
   $quant_galao = $area_para_pintar / $rendimento_por_galao; 
   $custo_galao = $quant_galao * $preco_por_galao;

   print "A quantidade de galões necessários para pintar $area_para_pintar é de $quant_galao, o que gera um custo de $custo_galao reais.";

   // Latas & Galões
    
   $quant_lata = (int) ($area_para_pintar / $rendimento_lata);
   $resto_lata = $area_para_pintar % $rendimento_lata;
   $quant_galao = ceil ($resto_lata / $rendimento_lata);
   $custo_total = $quant_lata * $custo_lata + $quant_galao * $custo_galao;

   print "Para pintar uma área de $area_para_pintar será necessário $quant_lata latas e $quant_galao galões de tinta, o que gera um custo total de $custo_total reais.";
