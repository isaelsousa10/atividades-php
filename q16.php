<?php 

$for = 2;
$int = 3;
$agi = 1;

if ( $for > $int or $int < $agi ) {
     echo " Seus Atributos São : $for , $int e $agi ; Sua Classe é Guerreiro ";
}
    
    elseif ( $int > $for or $for < $agi ) {
     echo " Seus Atributos São : $for , $int e $agi ; Sua Classe é Mago ";
    }

        elseif  ( $agi > $for  or $int > $for ) {
            echo " Seus Atributos São : $for , $int e $agi ; Sua Classe é Arqueiro ";
        }
else {
       " Seus Atributos São : $for , $int e $agi ; Sua Classe é Híbrida ";

}
?>