<?php

namespace Asdozzz\Essence;

class Operator
{
	public static function factory($operator_alias)
	{
		if (empty($operator_alias))
		{
			throw new \Exception("Название класса не указано");
		}

		$config = \Config::get('essence.operators.'.$operator_alias);

		if (empty($config))
		{
			throw new Exceptions\OperatorMissingException("Имя класса оператора <<$operator_alias>> не указано");
		}

		$class = new $config;

		$interfaces = class_implements($config);

		if (!isset($interfaces["Asdozzz\\Essence\\Interfaces\\iOperator"]))
		{
			throw new Exceptions\OperatorBadInstanceException("Class <<$config>> must implemenet Asdozzz\\Essence\\Interfaces\\iOperator");
		}

		return $class;
	}
}