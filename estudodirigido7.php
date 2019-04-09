//Faça um algoritmo que leia três números e mostre o maior e o menor deles.//

<?php

print "Digite o primeiro número: ";
$numero1 = fgets (STDIN);

print "Digite o segundo número: ";
$numero2 = fgets (STDIN);

print "Digite o terceiro número: ";
$numero3 = fgets (STDIN);

if ($numero1 > $numero2 and $numero2 > $numero3){
    print "$numero1 é o maior número e o menor é $numero3";
}

else{
if ($numero2 > $numero3 and $numero3 > $numero1)
    print "$numero2 é o maior número e o menor é $numero1";

else 
    print "$numero3 é o maior número e o menor é $numero2";
}


  