<?php

namespace Asdozzz\Essence\Operators;

abstract class AbstractOperator implements \Asdozzz\Essence\Interfaces\iOperator
{
	protected $static = false;
	public $name;
	public $operator;
	public $validation_rules = 'required';

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
	
	public static function getValue($value)
	{
		return $value;
	}

    public static function setFilter($query,$filter)
    {
        return $query->where($filter['colname'],$filter['operator'],$filter['value']);
    }
}