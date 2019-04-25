<?php

    print "\nax2 + bx + c\n";

    print "\nDigite um número inteiro para 'a': ";
        $a = (int) fgets(STDIN);

    print "\nDigite um número inteiro para 'b': ";
        $b= (int) fgets(STDIN);

    print "\nDigite um número inteiro para 'c': ";
        $c = (int) fgets(STDIN);

        if ($a==0){
            exit("\nO valor dado para 'a' não é válido e a função não funcionará!");
        }

        $delta = ($b*$b) - (4*$a*$c);

        $x1 = (-$b) + (sqrt($delta)) / (2*$a);
        $x2 = (-$b) - (sqrt($delta)) / (2*$a);

        if ($delta < 0){
            exit("\nO valor de delta é negativo, devido a isso, não existem raízes reais. \n\n");
        }elseif ($delta==0){
            print "\nO valor de delta é igual a $delta, ou seja, a equação possui apenas uma raiz real, sendo ela $x1, fazendo com que a função não funcione. \n\n";
        }else{
            print "\nO valor delta é igual a $delta. As duas raízes reais da equação são $x1 e $x2. \n\n";
        }

    print "\nO valor de 'x linha' é: $x1";
    print "\nO valor de 'x duas linhas' é: $x2";
?>