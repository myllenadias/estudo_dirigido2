//Faça um algoritmo que verifique se uma letra digitada é vogal ou consoante.//

<?php

print "Digite uma letra: ";
$letra = fgetc (STDIN);

if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u" ){
    print "A letra digitada é vogal";
}

else {
    print "A letra digitada é consoante";
}