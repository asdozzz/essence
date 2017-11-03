<?php

namespace Asdozzz\Essence\Operators;

class Today extends AbstractStaticOperator
{
	public $operator = '=';
	public $name     = 'сегодня';
	
	public static function getValue($value)
	{
		$now = new \DateTime();
		return $now->format('Y-m-d');
	}
}