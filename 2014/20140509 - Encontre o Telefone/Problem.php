<?php

class Teclado{
    public function tecla($letra){
        
        if (in_array($letra, array('D','E','F')))
            return 3;
        else if (in_array($letra, array('A','B','C')))
            return 2;
        else if (in_array($letra, array('G','H','I')))
            return 4;
        else            
            return $letra;
    }
    
}
