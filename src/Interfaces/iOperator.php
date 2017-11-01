<?php

namespace Asdozzz\Essence\Interfaces;

interface iOperator
{
	public static function get();
	public static function extend($array = array());

	public static function getValue($value);
    public static function setFilter($query,$filter);
}