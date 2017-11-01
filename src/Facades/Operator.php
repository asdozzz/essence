<?php
namespace Asdozzz\Essence\Facades;

use Illuminate\Support\Facades\Facade;

class Operator extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'operator';
	}
}