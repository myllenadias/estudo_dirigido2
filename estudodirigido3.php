//Faça um algoritmo que verifique se uma letra digitada é "F" ou "M". 
Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.//

<?php

print "Digite F ou M: ";
$sexo = fgetc (STDIN);

if ($sexo == "F") {
    print "O seu sexo é feminino";
}

elseif ($sexo == "M"){
    print "O seu sexo é masculino";
}

elseif ($sexo != "F" && $sexo != "M") {
    print "Sexo inválido";
} 



