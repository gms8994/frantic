<?php

namespace Frantic;

class Form {

	const VERSION = '0.0.1';

	private $name = null;
	private $fields = array();

	public function __construct($name = null) {
		if (! is_null($name)) {
			$this->name = $name;
		}
	}

	public function add($name, $type = 'text', $label = null, $validation = array()) {
		$field = new \Frantic\Field();
		$field->create($name, $type, $label, $validation);
		$this->fields[] = $field;
	}

	public function render($callback = null) {
		if (is_null($callback)) {
			$string = '';
			foreach ($this->fields as $field) {
				$string .= $field->render();
			}
		} else {
			$string = $callback($this->fields);
		}

		return $string;
	}

	public function validate($data = array()) {


	}
}
