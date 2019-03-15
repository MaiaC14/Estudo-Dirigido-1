<?php

print "Qual é a temperatura?"
$Temperatura = (int) fgets (STDIN) ; // em graus celcius 

$F = 9*$Temperatura/5 + 32;

print "Essa temperatura em graus Fahrenheit é: $F";

