<?php

class Teclado{
    public function tecla($letra){
        $dicionario = array(2 => array(''));
        $array['A'] = 2;
        $array['B'] = 2;
        $array['C'] = 2;
        $array['D'] = 3;
        $array['E'] = 3;
        $array['F'] = 3;
        $array['G'] = 4;
        $array['H'] = 4;
        $array['I'] = 4;
        $array['J'] = 5;
        $array['K'] = 5;
        $array['L'] = 5;

        if (in_array($letra, array('D','E','F')))
            return 3;
        else if (in_array($letra, array('A','B','C')))
            return 2;
        else if (in_array($letra, array('G','H','I')))
            return 4;
        else if (in_array($letra, array('J','K','L')))
            return 5;
        else if (in_array($letra, array('M','N','O')))
            return 6;
        else            
            return $letra;
    }
    
}
