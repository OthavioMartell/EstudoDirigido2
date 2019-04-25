<?php

    print "Digite o primeiro número: ";
        $n1 = (float) fgets(STDIN);

    print "Digite o segundo número: ";
        $n2 = (float) fgets(STDIN);
    
    print "Digite o terceiro número: ";
        $n3 = (float) fgets(STDIN);

    if($n1>$n2 and $n1>$n3){
        print "\nO número $n1 é o maior número!\n";
    }elseif($n2>$n1 and $n2>$n3){
        print "\nO número $n2 é o maior número!\n";
    }elseif($n3>$n1 and $n3>$n2){
        print "\nO número $n3 é o maior número!\n";
    }
?>