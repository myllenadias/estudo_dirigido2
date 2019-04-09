//Faça um algoritmo que peça dois números e imprima o maior deles.//

<?php

print "Digite um número: ";
$numero1 = fgets (STDIN);

print "Digite outro número: ";
$numero2 = fgets (STDIN);

if ($numero1 > $numero2){
print "$numero1 é maior que $numero2 ";
}

else {
    print "$numero2 é maior que $numero1 ";
}



