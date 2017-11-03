<?php

namespace Asdozzz\Essence\Operators;

class NotLike extends AbstractOperator
{
	public $operator = 'not_like';
	public $name     = 'не содержит';

    public static function setFilter($query,$filter)
    {
        return $query->where($filter['colname'],'not like','%'.$filter['value'].'%');
    }
}