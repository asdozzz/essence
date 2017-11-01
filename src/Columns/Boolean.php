<?php

namespace Asdozzz\Essence\Columns;

class Boolean extends Column
{
	public $type               = 'boolean';
	public $name               = 'Булевое';
	public $data               = 'boolean';
	public $system             = false;
	public $required           = false;
	public $events             = [];
	public $validation_rules   = 'boolean';
	public $convertation_rules = array();

	public function __construct()
	{
		parent::__construct();
		$this->convertation_rules[] = function($value){
			return (bool)$value;
		};
	}
}