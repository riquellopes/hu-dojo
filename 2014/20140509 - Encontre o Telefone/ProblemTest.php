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
    public $teclado;
  function setUp() {
    $this->teclado = new Teclado();
  }

  function test_letra_ABC_deve_ser_2(){
    $this->assertEquals($this->teclado->tecla('A'), 2);
    $this->assertEquals($this->teclado->tecla('B'), 2);
    $this->assertEquals($this->teclado->tecla('C'), 2);
  }

  function test_letra_DEF_deve_ser_3(){
    $this->assertEquals($this->teclado->tecla('D'), 3);
    $this->assertEquals($this->teclado->tecla('E'), 3);
    $this->assertEquals($this->teclado->tecla('F'), 3);
  }

  function test_letra_GHI_deve_ser_4(){
    $this->assertEquals($this->teclado->tecla('G'), 4);
    $this->assertEquals($this->teclado->tecla('H'), 4);
    $this->assertEquals($this->teclado->tecla('I'), 4);
  }

  function test_letra_JKL_deve_ser_5(){
    $this->assertEquals($this->teclado->tecla('J'), 5);
    $this->assertEquals($this->teclado->tecla('K'), 5);
    $this->assertEquals($this->teclado->tecla('L'), 5);
  }

  function test_letra_MNO_deve_ser_6(){
    $this->assertEquals($this->teclado->tecla('M'), 6);
    $this->assertEquals($this->teclado->tecla('N'), 6);
    $this->assertEquals($this->teclado->tecla('O'), 6);
  }

  function test_letra_PQRS_deve_ser_7(){
    $this->assertEquals($this->teclado->tecla('P'), 7);
    $this->assertEquals($this->teclado->tecla('Q'), 7);
    $this->assertEquals($this->teclado->tecla('R'), 7);
    $this->assertEquals($this->teclado->tecla('S'), 7);
  }

  function test_letra_TUV_deve_ser_8(){
    $this->assertEquals($this->teclado->tecla('T'), 8);
    $this->assertEquals($this->teclado->tecla('U'), 8);
    $this->assertEquals($this->teclado->tecla('V'), 8);
  }
  
  function test_letra_WXYZ_deve_ser_9(){
    $this->assertEquals($this->teclado->tecla('W'), 9);
    $this->assertEquals($this->teclado->tecla('X'), 9);
    $this->assertEquals($this->teclado->tecla('Y'), 9);
    $this->assertEquals($this->teclado->tecla('Z'), 9);
  }

  function test_alphanumerico_0_deve_ser_0(){
    $this->assertEquals($this->teclado->tecla(0), 0);
    $this->assertEquals($this->teclado->tecla('0'), 0);
  }

  function test_alphanumerico_1_deve_ser_1() {
    $this->assertEquals($this->teclado->tecla(1), 1);
    $this->assertEquals($this->teclado->tecla('1'), 1);
  }    

  function test_hifen_deve_ser_hifen() {
    $this->assertEquals($this->teclado->tecla('-'), '-');
  }

  function test_home_deve_ser_4663() {
    $this->assertEquals($this->teclado->entrada('HOME'), '4663');
  }
}

