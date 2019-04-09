// Faça um programa que leia 5 números e informe o maior número.//

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

if ($numero1 > $numero2 and $numero1 > $numero3 and $numero1 > $numero4 and $numero1 > $numero5){
    print "O número maior é o: $numero1";
}

if ($numero2 > $numero1 and $numero2 > $numero3 and $numero2 > $numero4 and $numero2 > $numero5){
    print "O número maior é o: $numero2";
}

if ($numero3 > $numero1 and $numero3 > $numero2 and $numero3 > $numero4 and $numero3 > $numero5){
    print "O número maior é o: $numero3";
}

if ($numero4 > $numero1 and $numero4 > $numero2 and $numero4 > $numero3 and $numero4 > $numero5){
    print "O número maior é o: $numero4";
}

if ($numero5 > $numero1 and $numero5 > $numero2 and $numero5 > $numero3 and $numero5 > $numero4){
    print "O número maior é o: $numero5";
}








