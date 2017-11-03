<?php

namespace Asdozzz\Essence\Operators;

class Between extends AbstractOperator
{
	public $operator = 'BEETWEN';
	public $name     = 'между';

    public static function setFilter($query,$filter)
    {
        return $query->whereBetween($filter['colname'],$filter['value']);
    }
}