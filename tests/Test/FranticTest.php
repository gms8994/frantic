<?php

namespace Test\Frantic;

$result = require_once __DIR__ . '/../../vendor/autoload.php';

use \Frantic;

# echo 'Frantic ' . \Frantic::VERSION . ' tested with ';

class FranticTest extends \PHPUnit_Framework_TestCase {

	public function testNewInstance() {
		$form = new \Frantic\Frantic();
		$this->assertTrue(is_a($form, 'Frantic\\Frantic'), 'Form must be an object');
	}

}
