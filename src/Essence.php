<?php

namespace Asdozzz\Essence;

class Essence
{
	public static function factory($essence)
	{
		if (empty($essence))
		{
			throw new \Exception("Название класса не указано");
		}

		$config = \Config::get('essence.essences.'.$essence);

		if (empty($config))
		{
			throw new Exceptions\EssenceMissingException("Essence:Имя класса cущности <<$essence>> не указано");
		}

		$class = new $config;

		$interfaces = class_implements($config);

		if (!isset($interfaces["Asdozzz\\Essence\\Interfaces\\iEssence"]))
		{
			throw new Exceptions\EssenceBadInstanceException("Class <<$config>> must implemenet Asdozzz\\Essence\\Interfaces\\iEssence");
		}

		return $class;
	}
}