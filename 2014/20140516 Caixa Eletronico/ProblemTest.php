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

    private $_caixaEletronico;

    function setUp(){
        $this->_caixaEletronico = new CaixaEletronico();
    }

    function testFuncaoRetornaArrayComNotas(){
        $this->assertInternalType('array', $this->_caixaEletronico->saque(10));
    }

    function testFuncaoRetornaArrayComNotasPara10(){
        $this->assertEquals(array(10 => 1), $this->_caixaEletronico->saque(10));
    }

    function testFuncaoRetornaArrayComNotasPara20(){
        $this->assertEquals(array(20 => 1), $this->_caixaEletronico->saque(20));
    }

    function testFuncaoRetornaArrayComNotasPara50(){
        $this->assertEquals(array(50 => 1), $this->_caixaEletronico->saque(50));
    }

    function testFuncaoRetornaArrayComNotasPara100(){
        $this->assertEquals(array(100 => 1), $this->_caixaEletronico->saque(100));
    }

    function testFuncaoRetornaArrayComNotasPara30(){
        $this->assertEquals(array(20 => 1, 10 => 1), $this->_caixaEletronico->saque(30));
    }

    function testFuncaoRetornaArrayComNotasPara40(){
        $this->assertEquals(array(20 => 2), $this->_caixaEletronico->saque(40));
    }

    function testFuncaoRetornaArrayComNotasPara80(){
        $this->assertEquals(array(50 => 1, 20 => 1, 10 => 1), $this->_caixaEletronico->saque(80));
    }

    function testFuncaoRetornaArrayComNotasPara280(){
        $this->assertEquals(array(100 => 2, 50 => 1, 20 => 1, 10 => 1), $this->_caixaEletronico->saque(280));
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Valor 25 inválido.
     */
    function testFuncaoRetornaExceptionComNotasPara25(){
        $this->_caixaEletronico->saque(25);
    }

}
