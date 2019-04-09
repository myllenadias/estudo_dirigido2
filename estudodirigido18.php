//Faça um programa que peça 10 números inteiros, 
calcule e mostre a quantidade de números pares e a quantidade de números impares. //

<?php

$numeros_par=0;
$numeros_impar=0;
$contagem=1;

do {print "Digite um número: ";
 $numero = (float) fgets (STDIN);

 if ($numero%2==0)
 {$numeros_par++;}

if ($numero%2!=0)
{$numeros_impar++;}

$contagem++;} 
while($contagem<=10);

print "Quantidade de número(s) par(es): $numeros_par \n
Quantidade de número(s) impar(es): $numeros_impar";

