<?php

print "Qual é a distância a ser percorrida?"
$Distancia = (int) fgets (STDIN); // em km

print "A que velocidade você pretende percorrer essa distância?"
$velocidade_media = (int) fgets (STDIN); // em km/h

$Tempo = $Distancia/$velocidade_media;

print "O tempo estimado da viagem deve ser de $Tempo hora(s)";