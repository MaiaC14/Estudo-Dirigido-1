<?php

   print "Informe o número de dias:";
   $dias =  (int) fgets (STDIN);
   
   $horas = $dias * 24;
  
   $minutos = $horas * 60;
   
   $segundos = $minutos * 60;

   $total_segundos = $segundos + $minutos + $horas + $dias;

   print "A soma de todos os segundos é de $segundos";
