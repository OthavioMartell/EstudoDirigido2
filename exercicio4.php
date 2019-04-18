<?php

    print "Digite uma letra: ";
        $l = fgetc(STDIN);

    if ($l=='a' or $l=='A' or $l=='e' or $l=='E' or $l=='i' or $l=='I' or $l=='o' or $l=='O' or $l=='u' or $l=="U"){
        print "A sua letra é uma vogal.\n";
    }
    else{
        print "A sua letra é uma consoante.\n";
    }
?>