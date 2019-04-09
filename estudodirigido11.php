//Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas, 
dezenas e unidades do mesmo, observando os termos no plural a colocação do "e", da vírgula entre outros.
 Exemplo:  326 = 3 centenas, 2 dezenas e 6 unidades  12 = 1 dezena e 2 unidades//

<?php

print "digite um número inteiro menor que 1000: \n";

$Numero= fgets(STDIN);
$qtdnumero= $Numero;

if ($qtdnumero=3){
    $centena=(int)($Numero/100)%100;
    $dezena= (int)($Numero/10)%10;
    $unidade=(int)($Numero%100)%10;
    print "$Numero = $centena centenas , $dezena dezenas e $unidade unidades ";
  
}
