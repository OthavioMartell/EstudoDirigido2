<?php

    print "Digite um número: ";
        $n1 = (float) fgets(STDIN);

    print "Digite outro número: ";
        $n2 = (float) fgets(STDIN);

    
    if ($n1>$n2){
        print "O número $n1 é o maior número\n";
    }

    if ($n2>$n1){
        print "O número $n2 é o maior número.\n";
    }
?>