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

    public static function setFilter($query,$filter)
    {
        return $query->whereNotNull($filter['colname']);
    }
}