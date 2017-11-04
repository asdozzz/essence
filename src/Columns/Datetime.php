<?php

namespace Asdozzz\Essence\Columns;

class Datetime extends \Asdozzz\Essence\Columns\Date
{
    public $html = [
        'type'	=> 'vika-datetime'
    ];

	public $type             = 'datetime';
    public $format           = 'Y-m-d H:i:s';
	public $name             = 'ДатаВремя';
	public $data             = 'datetime';
	public $validation_rules = 'date_format:Y-m-d H:i:s|nullable';

    public function __construct()
    {
        parent::__construct();

        $this->convertation_rules = [];
        $this->convertation_rules[] = function($value, $options = array('format'=>'Y-m-d H:i:s'))
        {
            return date($options['format'],strtotime($value));
        };
    }
}