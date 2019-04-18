<?php

    print "Escolha um sexo (F ou M): ";
        $l = fgetc(STDIN);

    if ($l=='F' or $l=='f'){
        print "Você escolheu o sexo feminino.\n";
    }

    elseif ($l=='M' or $l=='m'){
        print "Você escolheu o sexo masculino.\n";
    }

    else{
        print "Sexo inválido.\n";
    }
?>