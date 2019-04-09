<?php 
// Faça um algoritmo que imprima as seguintes figuras geométricas: //

//quadrado
$x=8;
for ($i=1; $i<=$x; $i++) { 

    for ($j=1; $j<=$x; $j++) { 
        print "* ";
    }
    print "\n";
}


//triangulo1

for ($i=1; $i<=$x; $i++){ 
    
    for($h=1; $h<=$i; $h++){
        print "* ";
    }
    
    print "\n";
}


//triangulo2

for ($i=0; $i<=$x; $i++){ 
    
    for($k=0; $k<=$x-$i; $k++){
        print "  ";
    }

    for($k=0; $k<$i; $k++){
        print "* ";
    }
    
    print "\n";
}


