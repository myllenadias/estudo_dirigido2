//Faça um algoritmo que peça um valor e mostre na tela se o valor é positivo ou negativo.//

<?php

print "Digite um valor: ";
$valor = fgets (STDIN);

if ($valor < 0){
    print "O valor $valor é negativo";
}

else {
    print "O valor $valor é positivo";
}