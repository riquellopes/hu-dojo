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


http://dojopuzzles.com/problemas/exibe/anagramas/

*/

require dirname(__FILE__) . '/Problem.php';

class ProblemTest extends PHPUnit_Framework_TestCase{

  function setUp() {
  	$this->anagrama = new Anagrama("baeta");
  }
  
  function test_para_a_palavra_baeta_deve_gerar_pelo_menos_o_anagrama_batae(){
	$this->assertTrue(in_array('batae', $this->anagrama->get()));
  }
  
  function test_para_a_palavra_biro_deve_existir_pelo_menos_anagranama_bior(){
	 $ana = new Anagrama("biro");
	 $this->assertTrue(in_array('bior', $ana->get()));
  }

  function test_para_a_palavra_gato_deve_existir_pelo_menos_anagranama_gaot(){
	 $ana = new Anagrama("gato");
	 $this->assertTrue(in_array('gaot', $ana->get()));
  }
}
