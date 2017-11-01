<?php

namespace Asdozzz\Essence\Columns;

abstract class Column implements \Asdozzz\Essence\Interfaces\iColumn
{
	public $name;
	public $data;
	public $type               = 'string';
    public $length             = 255;
    public $default            = false;
	public $html               = ['type' => 'text'];
	public $visible            = true;
	public $required           = false;
	public $system             = false;
	public $events             = [];
	public $validation_rules   = '';
	public $convertation_rules = [];
	public $operators          = [];
	
	public $default_value = [
		'type'  => 'scalar',
		'value' => NULL
	];

	public function __construct()
	{
		if ($this->required)
		{
			$v_arr = explode('|', $this->validation_rules);

			if (!in_array('required',$v_arr))
			{
				$v_arr = array_merge(['required'],$v_arr);
				$this->validation_rules = join('|',$v_arr);
			}
		}

		$this->operators = [
			\Operator::factory('=')->get(),
			\Operator::factory('!=')->get(),
			\Operator::factory('like')->get(),
			\Operator::factory('not_like')->get(),
			\Operator::factory('>' )->get(),
			\Operator::factory('>=' )->get(),
			\Operator::factory('<' )->get(),
			\Operator::factory('<=' )->get(),
			\Operator::factory('is_null')->get(),
			\Operator::factory('is_not_null')->get(),
			/*\Operator::factory('between')->get(),
			\Operator::factory('not_between')->get(),*/
			\Operator::factory('in')->get(),
			\Operator::factory('not_in')->get(),
		];
	}

	public static function get()
	{
		$inst = new static();
		$vars = get_object_vars($inst);
		return $vars;
	}

	public static function extend($array = array())
	{
		$vars = self::get();
		$vars =  array_replace_recursive($vars,$array);
		return $vars;
	}
}