<?php

require("fizzbuzz.php");

class fizzbuzzTest extends PHPUnit_Framework_TestCase {

    public function testCasoNumeroDivisivelPor3RetorneFizz() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(3), "Fizz");
    }

    public function testCaso_o_numero_nao_seja_divisivel_por_3_deve_retornar_ele_mesmo() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(4), 4);
    }


    public function testCaso_o_numero_9_seja_divisivel_por_3() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(9), "Fizz");
    }
    
    public function testCaso_o_numero_seja_divisivel_por_5() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(5), "Buzz");
    }

    public function testCaso_o_numero_seja_divisivel_por_10() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(10), "Buzz");
    }

    public function testCaso_nao_seja_numero() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz("j"), false);
    }

    public function testCaso_o_numero_seja_divisivel_por_3_e_5() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(15), "FizzBuzz");
        $this->assertEquals($fizz->verificaFizzBuzz(30), "FizzBuzz");
    }

    public function testCaso_seja_vazio() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(), false);
    }

    public function testCaso_parametroForaDoRange() {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(0), false);
        $this->assertEquals($fizz->verificaFizzBuzz(-223), false);
        $this->assertEquals($fizz->verificaFizzBuzz(101), false);
    }

    public function testCaso_numero_decimal() 
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->verificaFizzBuzz(12.4), false);
        $this->assertEquals($fizz->verificaFizzBuzz(123.8), false);
    }

    public function testCasoRetornaQuebraLinhas()
    {
        $fizz = new FizzBuzz();
        ob_start();
        $fizz->imprime();
        $teste = ob_get_contents();
        $teste = explode("\n",$teste);
        $this->assertEquals(100,count($teste));
    }
}
