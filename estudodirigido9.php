//Faça um algoritmo que leia três números e mostre-os em ordem decrescente.//

<?php 

print "Digite o primeiro número: ";
$numero1= fgets (STDIN);

print "Digite o segundo número: ";
$numero2= fgets (STDIN);

print "Digite o terceiro número: ";
$numero3= fgets (STDIN);

if ($numero1 > $numero2 and $numero2 > $numero3){
print "$numero1 $numero2 $numero3";
}
if ($numero2 > $numero1 and $numero1 > $numero3){
    print "$numero2 $numero1 $numero3";
}
if ($numero3 > $numero2 and $numero2 > $numero1){
    print "$numero3 $numero2 $numero1";
}

