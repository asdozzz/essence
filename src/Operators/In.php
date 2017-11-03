<?php

namespace Asdozzz\Essence\Operators;

class In extends AbstractOperator
{
	public $operator = 'IN';
	public $name     = 'соотвествует';

    public static function setFilter($query,$filter)
    {
        return $query->whereIn($filter['colname'],$filter['value']);
    }
}