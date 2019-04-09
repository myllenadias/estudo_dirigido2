//Faça um programa que leia 5 números e informe a soma e a média dos números. //

<?php

print "Digite o primeiro número: ";
$numero1 = fgets (STDIN);

print "Digite o segundo número: ";
$numero2 = fgets (STDIN);

print "Digite o terceiro número: ";
$numero3 = fgets (STDIN);

print "Digite o quarto número: ";
$numero4 = fgets (STDIN);

print "Digite o quinto número: ";
$numero5 = fgets (STDIN);

$soma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5;
$media = $soma/5;

print "A soma é de: $soma \n A média é de: $media";