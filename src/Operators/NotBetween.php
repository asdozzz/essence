<?php

namespace Asdozzz\Essence\Operators;

class NotBetween extends AbstractOperator
{
	public $operator = 'NOT BEETWEN';
	public $name     = 'не между';

    public static function setFilter($query,$filter)
    {
        return $query->whereNotBetween($filter['colname'],$filter['value']);
    }
}