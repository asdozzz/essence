<?php

namespace Asdozzz\Essence\Operators;

class Tomorrow extends AbstractStaticOperator
{
	public $operator = '=';
	public $name     = 'завтра';
	
	public static function getValue($value)
	{
		$date = new \DateTime();
		$date->add(\DateInterval::createFromDateString('tomorrow'));
		return $date->format('Y-m-d');
	}
}