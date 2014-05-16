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
        $this->assertEquals(array(10 => 2), $caixaEletronico->saque(20));
    }

}
