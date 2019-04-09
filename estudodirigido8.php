//Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, 
sabendo que a decisão é sempre pelo mais barato. //

<?php

print "Digite o preço do primeiro produto: ";
$preco1 = fgets (STDIN);

print "Digite o preço do segundo produto: ";
$preco2 = fgets (STDIN);

print "Digite o preço do terceiro produto: ";
$preco3 = fgets (STDIN);

if ($preco1 < $preco2 and $preco2 < $preco3){
    print " Você deve comprar o primeiro produto no valor de $preco1 reais";
}

else{
    if ($preco2 < $preco1 and $preco1 < $preco3)
    print " Você deve comprar o segundo produto no valor de $preco2 reais";
    
    else 
    print " Você deve comprar o terceiro produto no valor de $preco3 reais";
    }