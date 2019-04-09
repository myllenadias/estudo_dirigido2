//Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado ao segundo número.
 Não utilize a função de potência da linguagem. //

 <?php

 print "Digite a base: ";
 $base = fgets (STDIN);

 print "Digite o expoente: ";
 $expoente = fgets (STDIN);

 $potencia = ($base ** $expoente);

 print " A resposta é: $potencia";