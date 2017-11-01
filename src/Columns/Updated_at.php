<?php

namespace Asdozzz\Essence\Columns;

class Updated_at extends Datetime
{
	public $name     = 'Дата и время последнего изменения';
	public $data     = 'updated_at';
	public $system   = true;
	public $required = true;
	public $events   = array();

	public function __construct()
	{
		parent::__construct();
		$this->default_value = [
			'type' => 'function',
			'value' => function($record)
			{
				return date('Y-m-d H:i:s');
			}
		];
	}
}