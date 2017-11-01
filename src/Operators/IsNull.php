<?php

namespace Asdozzz\Essence\Operators;

class IsNull extends AbstractStaticOperator
{
	public $operator = 'IS';
	public $name     = 'не указан';
	
	public static function getValue($value)
	{
		return NULL;
	}
}