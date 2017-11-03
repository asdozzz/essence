<?php

namespace Asdozzz\Essence\Operators;

class Yesterday extends AbstractStaticOperator
{
	public $operator = '=';
	public $name     = 'вчера';
	
	public static function getValue($value)
	{
		$date = new \DateTime();
		$date->add(\DateInterval::createFromDateString('yesterday'));
		return $date->format('Y-m-d');
	}
}