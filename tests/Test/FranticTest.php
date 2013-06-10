<?php

namespace Test\Frantic;

$result = require_once __DIR__ . '/../../vendor/autoload.php';

use \Frantic;

# echo 'Frantic ' . \Frantic::VERSION . ' tested with ';

class FranticTest extends \PHPUnit_Framework_TestCase {

	public function testNewInstance() {
		$form = new \Frantic\Form();
		$this->assertTrue(is_a($form, 'Frantic\\Form'), 'Form must be an object');
	}

	public function testAddBaseField() {
		$form = new \Frantic\Form();
		$form->add("firstname");

		$output = $form->render();
		$this->assertEquals('<input type="text" name="firstname" />', $output, 'Rendered form should match');
	}

	public function testAddFieldWithLabel() {
		$form = new \Frantic\Form();
		$form->add("firstname", "text", "First Name");

		$output = $form->render();
		$this->assertEquals('<label for="">First Name</label><input type="text" name="firstname" />', $output, 'Rendered form should match');
	}

}
