//A série de Fibonacci é formada pela sequência 0,1,1,2,3,5,8,13,21,34,55, [...] 
Faça um programa que gere a série até que o valor seja maior que 500.//

<?php

$n1=1;
$n2=0;

for($i=0; $i<=14; $i++){
$fibonacci= $n1 + $n2;
$n1=$n2;
$n2= $fibonacci;
}
print "\n $fibonacci";



