<?php

namespace Asdozzz\Essence\Operators;

class Like extends AbstractOperator
{
	public $operator = 'like';
	public $name     = 'содержит';

    public static function setFilter($query,$filter)
    {
        return $query->where($filter['colname'],'like','%'.$filter['value'].'%');
    }

}