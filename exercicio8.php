<?php

    print "Digite o primeiro preço: ";
        $preco1 = (float) fgets(STDIN);

    print "\nDigite o segundo preço: ";
        $preco2 = (float) fgets(STDIN);

    print "\nDigite o terceiro preço: ";
        $preco3 = (float) fgets(STDIN);

        if($preco1<$preco2 and $preco1<$preco3){
            print "\nO menor preço é $preco1!\n";
            }elseif($preco2<$preco1 and $preco2<$preco3){
            print "\nO nenor preço é $preco2!\n";
            }elseif($preco3<$preco1 and $preco3<$preco2){
            print "\nO menor preço é $preco3!\n";
            }
?>