<?php

class Teclado {
    public function tecla($letra){
        if ($letra == 'D' || $letra == 'E' || $letra == 'F')
            return 3;
        else if ($letra == 'A' || $letra == 'B' || $letra == 'C')
        
            return $letra;
        return 2;
    }
    
}
