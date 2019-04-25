<?php

    print "Digite o primeiro número: ";
        $n1 = (float) fgets(STDIN);

    print "Digite o segundo número: ";
        $n2 = (float) fgets(STDIN);
    
    print "Digite o terceiro número: ";
        $n3 = (float) fgets(STDIN);

    print "Digite o quarto número: ";
        $n4 = (float) fgets(STDIN);
    
    print "Digite o quinto número: ";
        $n5 = (float) fgets(STDIN);

    if($n1>$n2 and $n1>$n3 and $n1>$n4 and $n1>$n5){
        print "\nO número $n1 é o maior número!\n";
    }elseif($n2>$n1 and $n2>$n3 and $n2>$n4 and $n2>$n5){
        print "\nO número $n2 é o maior número!\n";
    }elseif($n3>$n1 and $n3>$n2 and $n3>$n4 and $n3>$n5){
        print "\nO número $n3 é o maior número!\n";
    }elseif($n4>$n1 and $n4>$n2 and $n4>$n3 and $n4>$n5){
        print "\nO número $n4 é o maior número!\n";
    }elseif($n5>$n1 and $n5>$n2 and $n5>$n3 and $n5>$n4){
        print "\nO número $n5 é o maior número!\n";
    }
?>