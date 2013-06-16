<?php

namespace Frantic;

class Field {

	private $name = null;
	private $type = 'text';
	private $label = null;
	private $validation = array();

	/**
	 * Getter for name
	 *
	 * @return mixed
	 */
	public function getName()
	{
	    return $this->name;
	}

	/**
	 * Setter for name
	 *
	 * @param mixed $name Value to set

	 * @return self
	 */
	public function setName($name)
	{
	    $this->name = $name;
	    return $this;
	}

	/**
	 * Getter for type
	 *
	 * @return mixed
	 */
	public function getType()
	{
	    return $this->type;
	}
	
	/**
	 * Setter for type
	 *
	 * @param mixed $type Value to set
	
	 * @return self
	 */
	public function setType($type)
	{
	    $this->type = $type;
	    return $this;
	}
	
	/**
	 * Getter for label
	 *
	 * @return mixed
	 */
	public function getLabel()
	{
	    return $this->label;
	}
	
	/**
	 * Setter for label
	 *
	 * @param mixed $label Value to set
	
	 * @return self
	 */
	public function setLabel($label)
	{
	    $this->label = $label;
	    return $this;
	}
	
	/**
	 * Getter for validation
	 *
	 * @return mixed
	 */
	public function getValidation()
	{
	    return $this->validation;
	}
	
	/**
	 * Setter for validation
	 *
	 * @param mixed $validation Value to set
	
	 * @return self
	 */
	public function setValidation($validation)
	{
	    $this->validation = $validation;
	    return $this;
	}
	

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
