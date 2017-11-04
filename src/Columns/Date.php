<?php

namespace Asdozzz\Essence\Columns;

class Date extends \Asdozzz\Essence\Columns\Column
{
    public $html = [
        'type'	=> 'vika-date'
    ];

	public $type               = 'date';
    public $format             = 'Y-m-d';

	public $name               = 'Дата';
	public $data               = 'date';
	public $system             = false;
	public $required           = false;
	public $events             = [];
	public $validation_rules   = 'date_format:Y-m-d|nullable';
	public $convertation_rules = array();

	public function __construct()
	{
		parent::__construct();
		$this->convertation_rules[] = function($value, $options = array('format'=>'Y-m-d'))
        {
			return date($options['format'],strtotime($value));
		};

        $this->setOperatorsForDate();
    }

    private function setOperatorsForDate()
    {
        $this->operators = [
            \Operator::factory('=')->get(),
            \Operator::factory('!=')->get(),
            \Operator::factory('>')->get(),
            \Operator::factory('>=')->get(),
            \Operator::factory('<')->get(),
            \Operator::factory('<=')->get(),
            \Operator::factory('is_null')->get(),
            \Operator::factory('is_not_null')->get(),
        ];
    }
}