<?php

namespace Asdozzz\Essence\Columns;

class Deleted_at extends \Asdozzz\Essence\Columns\Datetime
{
	public $name     = 'Дата и время удаления';
	public $data     = 'deleted_at';
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