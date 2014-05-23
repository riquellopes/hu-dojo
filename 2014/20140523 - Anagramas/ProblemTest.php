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

  protected function setUp() {
  	$this->anagrama = new anagrama();
  }
  function testSeRetornaString(){
  	$this->assertInternalType(
  		'string',
  		$this->anagrama->get(),
  		'Não é uma string'
  	);
  }

}
