<?php

print "Qual o preço do produto?"
$preco = (int) fgets (STDIN);

print "De quanto é o desconto?"
$porcentagem_desconto = (int) fgets (STDIN);

$preco_desconto = $preco*(1-($porcentagem_desconto/100));

$valor_desconto = $preco - $preco_desconto;
echo "o valor do desconto é de $valor_desconto . O novo valor do produto é de $preco_desconto";
