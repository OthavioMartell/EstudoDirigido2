<?php     

    print "Digite a primeira nota: ";
        $n1 = (float) fgets(STDIN);

    print "\nDigite a segunda nota: ";
        $n2 = (float) fgets(STDIN);

        $soma = $n1 + $n2;
        $media = $soma/2;
    
    if($media>=7 and $media<10){
        print "\nAprovado!\n";
    }elseif($media==10){
        print "\nAprovado com distinção!\n";
    }elseif($media<7 and $media>0){
        print "\nReprovado!\n";
    }
?>