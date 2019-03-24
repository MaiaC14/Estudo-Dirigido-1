<?php

print "Qual é a distância a ser percorrida?"
$distancia = (int) fgets (STDIN); // em km

print "A que velocidade você pretende percorrer essa distância?"
$velocidade_media = (int) fgets (STDIN); // em km/h

$Tempo = $distancia/$velocidade_media;

print "O tempo estimado da viagem deve ser de $Tempo hora(s).";
