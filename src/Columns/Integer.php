<?php

namespace Asdozzz\Essence\Columns;

class Integer extends \Asdozzz\Essence\Columns\Column
{
	public $html = [
		'type' => 'numeric'
	];
	public $type             = 'integer';
    public $length           = 10;
	public $name             = 'Целое число';
	public $data             = 'integer';
	public $system           = false;
	public $required         = false;
	public $events           = [];
	public $validation_rules = 'integer|nullable';

	public $convertation_rules = array();

	public function __construct()
	{
		parent::__construct();
		$this->convertation_rules[] = function($value){
			return intval($value);
		};

		$this->operators[] = \Operator::factory('between')->get();
        $this->operators[] = \Operator::factory('not_between')->get();
	}
}