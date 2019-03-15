<?php

   print "Informe o número de dias:";
   $dias =  (int) fgets (STDIN);
   // multiplicar por 86400
   $horas = $dias * 24;
   // multiplicar por 3600
   $minutos = $horas * 60;
   // multiplicar por 60
   $segundos = $minutos * 60;
   // multiplicar por 60


   $total_segundos = $segundos + $minutos + $horas + $dias;

   print "A soma de todos os segundos é de $segundos";

