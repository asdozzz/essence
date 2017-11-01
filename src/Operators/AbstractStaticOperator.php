<?php

namespace Asdozzz\Essence\Operators;

abstract class AbstractStaticOperator extends AbstractOperator implements \Asdozzz\Essence\Interfaces\iOperator
{
	protected $static = true;
	public $name;
	public $operator;

    public static function setFilter($query,$filter)
    {
        return $query->where($filter['colname'],$filter['operator'],$filter['value']);
    }
}