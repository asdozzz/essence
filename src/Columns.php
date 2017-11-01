<?php

namespace Asdozzz\Essence;

class Columns
{
	public static function factory($column)
	{
		if (empty($column))
		{
			throw new Exception("Название класса не указано");
		}

		$config = \Config::get('essence.columns.'.$column);

		if (empty($config))
		{
			throw new Exceptions\ColumnMissingException("Имя класса поля <<$column>> не указано");
		}
		
		$class = new $config;

		$interfaces = class_implements($config);

		if (!isset($interfaces["Asdozzz\Essence\Interfaces\iColumn"]))
		{
			throw new Exceptions\ColumnBadInstanceException("Class <<$config>> must implemenet Asdozzz\Essence\Interfaces\iColumn");
		}

		return $class;
	}
}