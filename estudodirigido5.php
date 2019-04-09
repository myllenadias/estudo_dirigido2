// Faça um algoritmo para a leitura de duas notas parciais de um aluno.
  O programa deve calcular a média alcançada por aluno e apresentar: 
  A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;  
  A mensagem "Reprovado", se a média for menor do que sete; 
  A mensagem "Aprovado com Distinção", se a média for igual a dez.// 

<?php

print "Digite sua primeira nota: ";
$nota1 = fgets (STDIN);

print "Digite sua segunda nota: ";
$nota2 = fgets (STDIN);

$media = ($nota1 + $nota2)/2;

if ($media >=7){

    if ($media >= 7 and $media < 10)
    print "Sua média foi $media , você foi aprovado(a)!";


    elseif ($media == 10)
    print "Sua média foi $media , você foi aprovado(a) com Distinção!";

}

else{
    print "Sua média foi $media , você foi reprovado(a)!";
}



