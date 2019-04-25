<?php

    print "Digite o primeiro número: ";
        $n1 = (float) fgets(STDIN);

    print "\nDigite o segundo número: ";
        $n2 = (float) fgets(STDIN);

    print "\nDigite o terceiro número: ";
        $n3 = (float) fgets(STDIN);

        $num = [$n1, $n2, $n3];

        rsort($num);

    foreach ($num as $final){
        print "\n$final\n";
    }
?>