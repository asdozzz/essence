<?php

namespace Asdozzz\Essence\Operators;

class NotIn extends AbstractOperator
{
	public $operator = 'NOT IN';
	public $name     = 'не соотвествует';

    public static function setFilter($query,$filter)
    {
        return $query->whereNotIn($filter['colname'],$filter['value']);
    }
}