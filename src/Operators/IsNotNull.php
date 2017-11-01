<?php

namespace Asdozzz\Essence\Operators;

class IsNotNull extends AbstractStaticOperator
{
	public $operator = 'IS NOT';
	public $name     = 'указан';
	
	public static function getValue($value)
	{
		return NULL;
	}
}