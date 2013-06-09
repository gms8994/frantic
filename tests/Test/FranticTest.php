<?php

namespace Test\Frantic;

require_once __DIR__ . '/../../vendor/autoload.php';

use Frantic\Frantic;

echo 'Frantic ' . \Frantic::VERSION . ' tested with ';

class FranticTest extends \PHPUnit_Framework_TestCase {

	public function testNewInstance() {
		$form = new Frantic();
		$this->assertTrue(is_a($form, 'Frantic\\Frantic'), 'Form must be an object');
	}

}
