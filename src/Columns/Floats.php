<?php

namespace Asdozzz\Essence\Columns;

class Floats extends \Asdozzz\Essence\Columns\Column
{
	public $html = [
		'type' => 'vika-numeric'
	];
	public $type             = 'float';
    public $length           = 10;
	public $name             = 'Дробное число';
	public $data             = 'float';
	public $system           = false;
	public $required         = false;
	public $events           = [];
	public $validation_rules = 'numeric';

	public $convertation_rules = array();

	public function __construct()
	{
		parent::__construct();
		$this->convertation_rules[] = function($value){
			return floatval($value);
		};
	}
}