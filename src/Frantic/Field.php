<?php

namespace Frantic;

class Field {

	private $name = null;
	private $type = 'text';
	private $label = null;
	private $validation = array();

	public function create($name, $type = 'text', $label = null, $validation = array()) {
		$this->name = $name;
		$this->type = $type;
		$this->label = $label;
		$this->validation = $validation;
	}

	public function render() {
		$output = '';

		if (! is_null($this->label)) {
			$output .= '<label for="">' . $this->label . '</label>';
		}

		$output .= '<';
		switch ($this->type) {
			case 'text':
				$output .= 'input type="text" name="' . $this->name . '" />';
				break;
			default:
				throw new \Exception("Cannot render unknown field type {$this->type}");
		}

		return $output;

	}
}
