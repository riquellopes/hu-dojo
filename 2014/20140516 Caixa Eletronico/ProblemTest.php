<?php

/* 
Install phpunit: 

pear channel-discover pear.phpunit.de
pear channel-discover components.ez.no
pear channel-discover pear.symfony-project.com
pear install phpunit/PHPUnit

For update see http://phpunit.de
 
Running Test:

phpunit --colors ProblemTest.php

*/

require dirname(__FILE__) . '/Problem.php';

class ProblemTest extends PHPUnit_Framework_TestCase{

    function testFuncaoRetornaArrayComNotas(){
        $caixaEletronico = new CaixaEletronico();
        $this->assertInternalType('array', $caixaEletronico->saque(10));
    }

    function testFuncaoRetornaArrayComNotasPara10(){
        $caixaEletronico = new CaixaEletronico();
        $this->assertEquals(array(10 => 1), $caixaEletronico->saque(10));
    }

    function testFuncaoRetornaArrayComNotasPara20(){
        $caixaEletronico = new CaixaEletronico();
        $this->assertEquals(array(20 => 1), $caixaEletronico->saque(20));
    }

    function testFuncaoRetornaArrayComNotasPara50(){
        $caixaEletronico = new CaixaEletronico();
        $this->assertEquals(array(50 => 1), $caixaEletronico->saque(50));
    }

    function testFuncaoRetornaArrayComNotasPara100(){
        $caixaEletronico = new CaixaEletronico();
        $this->assertEquals(array(100 => 1), $caixaEletronico->saque(100));
    }

    function testFuncaoRetornaArrayComNotasPara30(){
        $caixaEletronico = new CaixaEletronico();
        $this->assertEquals(array(20 => 1, 10 => 1), $caixaEletronico->saque(30));
    }

    function testFuncaoRetornaArrayComNotasPara40(){
        $caixaEletronico = new CaixaEletronico();
        $this->assertEquals(array(20 => 1, 10 => 1), $caixaEletronico->saque(30));
    }
}
