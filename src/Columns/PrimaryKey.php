<?php

namespace Asdozzz\Essence\Columns;

class PrimaryKey extends Integer
{
	public $type             = 'integer';
	public $name             = 'Идентификатор';
	public $data             = 'id';
	public $system           = false;
	public $required         = true;
	public $events           = [];
	public $validation_rules = 'required|integer';
	public $html = [
		'type' => 'hidden'
	];
	
}