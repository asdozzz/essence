<?php

namespace Asdozzz\Essence\Columns;

class Password extends \Asdozzz\Essence\Columns\Column
{
    public $html = [
        'type'	=> 'vika-password'
    ];

	public $name               = 'Пароль';
	public $data               = 'password';
	public $system             = false;
	public $required           = true;
	public $events             = [];
	public $validation_rules   = 'required|min:3';
	public $convertation_rules = [];

	public function __construct()
	{
		parent::__construct();
		$this->convertation_rules[] = function($value){
			return bcrypt($value);
		};
	}
}