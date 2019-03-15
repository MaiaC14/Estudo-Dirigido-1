<?php

print "Há quantos anos anos você fuma?";
$anos_fumados = (int) fgets (STDIN);
print "Quantos cigarros você fuma por dia?";
$quantidade_cigarros = (int) fgets (STDIN);


$cigarros_fumados = $quantidade_cigarros*365*$anos_fumados;
$minutos_perdidos = $cigarros_fumados*11;
$horas_perdidas = $minutos_perdidos/60;
$dias_perdidos = round($horas_perdidas/24);

print "Você perdeu $dias_perdidos dias de vida";