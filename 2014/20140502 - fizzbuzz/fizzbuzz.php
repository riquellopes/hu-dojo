<?php
class FizzBuzz{
    public function verificaFizzBuzz($d = false){
        if(!is_numeric($d) || ($d < 1) || ($d > 100) || is_float($d)){
            return false;
        } elseif ((($d % 3) == 0) && ($d % 5 == 0)) {
            return 'FizzBuzz';        
        } elseif (($d % 3) == 0) {
            return 'Fizz';        
        } elseif($d % 5 == 0){
            return 'Buzz';
        } else {
            return $d;
        }             
    }
    public function imprime(){
        for($i =1;$i<= 100;$i++){
            echo $this->verificaFizzBuzz($i);
            if ($i < 100) echo "\n";
        }
    }
}

