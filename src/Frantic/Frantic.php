<?php

namespace Frantic;

class Frantic {

	private $name = null;
	private $fields = array();

	public function __construct($name = null) {
		if (! is_null($name)) {
			$this->name = $name;
		}
	}

	public function add($name, $type = 'text', $label = null, $validation = array()) {
		$field = new Frantic\Field();
		$field->create($name, $type, $label, $validation);
		$fields[] = $field;
	}

	public function render($callback = null) {
		if (is_null($callback)) {
			$string = '';
			foreach ($fields as $field) {
				$string .= '';
			}
		} else {
			$string = $callback($fields);
		}

		return $string;
	}

	public function validate($data = array()) {


	}
}
